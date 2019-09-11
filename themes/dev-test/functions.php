<?php

class theme
{
	public function __construct()
	{
		// Add post thumbnail support
		add_theme_support('post-thumbnails');

		// Add SVG Support
		add_filter( 'upload_mimes', array( __CLASS__, 'add_svg_to_mime_types' ) );

		// enqueue theme style and script
		add_action('wp_enqueue_scripts', array(__CLASS__,'load_theme_assets'));

		// egister Menu Location
		add_action('after_setup_theme', array(__CLASS__, 'register_theme_menu'));

		//add_menu_parent_class to menu
		add_filter( 'wp_nav_menu_objects', array(__CLASS__, 'add_menu_parent_class'));

		/* add option page */
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
		}

		add_action('wp_ajax_catFilter', array(__CLASS__,'cat_filter_function'));
		add_action('wp_ajax_nopriv_catFilter', array(__CLASS__, 'cat_filter_function'));

	}

	/**
	 * Enable svg uploads to media
	 * @param $mimes
	 *
	 * @return mixed
	 */
	public static function add_svg_to_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}


	/**
	 * load theme assets
	 * @param
	 *
	 * @return mixed
	 */
	public static function load_theme_assets(){

		//style
		wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/style.css', false, 1.1, 'All');


		//jquery
		wp_dequeue_script('jquery');
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/src/js/modules/jquery.js', false , '1.11.3', true);
		wp_enqueue_script('jquery');
		//bootstrap.js
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/src/js/modules/bootstrap.js', array('jquery'), 1.1, true);
		wp_enqueue_script('bootstrap');
		//animsition.js
		wp_enqueue_script('animsition', get_template_directory_uri() . '/src/js/modules/animsition.js', array('jquery'), 1.1, true);
		wp_enqueue_script('animsition');

		//imagesloaded
		wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/src/js/modules/imagesloaded.pkgd.min.js', array('jquery'), 1.1, true);
		wp_enqueue_script('imagesloaded');

		//imagesloaded
		wp_enqueue_script('masonry', get_template_directory_uri() . '/src/js/modules/masonry.pkgd.min.js', array('jquery'), 1.1, true);
		wp_enqueue_script('masonry');

		//main js
		wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/index.js', array('jquery'), 1.1, true);
		wp_enqueue_script('main');
	}

	/*
	 * Register Menu location
	 * */
	public static function register_theme_menu(){
		register_nav_menus(array(
			'header-menu' => __('Location Header')
		));
	}

	/*
	 *
	 * */
	public static function add_menu_parent_class( $items ) {
		$parents = array();
		foreach ( $items as $item ) {
		    //Check if the item is a parent item
		    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
		        $parents[] = $item->menu_item_parent;
		    }
		}

		foreach ( $items as $item ) {
		    if ( in_array( $item->ID, $parents ) ) {
		        //Add "menu-parent-item" class to parents
		        $item->classes[] = 'dropdown';
		    }
		}

		return $items;
	}

	public function cat_filter_function(){

		if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);

		$query = new WP_Query( $args );

		if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();
				echo '<a href="'. get_the_permalink() .'" class="grid-item">';
					echo '<div style="background-image: url(' . get_the_post_thumbnail_url()  . ')" class="thumb"></div>';
						echo '<div class="caption">';
							echo '<div class="type">' . get_the_date() .'</div>';
							echo '<div class="description">';
								echo '<h4>' . get_the_title() . '</h4>';
                                echo '<p>' . get_the_excerpt() . '</p>';
                            echo  '</div>';
						echo '</div>';
				echo '</a>';
			endwhile;
			wp_reset_postdata();
		else :
			echo 'No posts found';
		endif;

		die();

	}

}

/* Override Nav Walker Class */
class Theme_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl(&$output, $depth, $args) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='dropdown'>\n";
  }
}

new theme();