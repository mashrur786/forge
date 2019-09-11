<?php
/**
 * Plugin Name: Forge Team Plugins
 * Description: This plugin is used to register a custom post type team and taxomoni Department
 * Author:      Mashrur Chowdhury
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

  add_action( 'init', 'create_post_type' );
  function create_post_type() {
	  register_post_type( 'Teams',
		  array(
			  'labels'        => array(
				  'name'               => __( 'Teams' ),
				  'singular_name'      => __( 'Team' ),
				  'add_new'            => __( 'Add New' ),
				  'add_new_item'       => __( 'Add a New Team' ),
				  'edit'               => __( 'Edit' ),
				  'edit_item'          => __( 'Edit Team' ),
				  'new_item'           => __( 'New Team' ),
				  'view'               => __( 'View' ),
				  'view_item'          => __( 'View Team' ),
				  'search_items'       => __( 'Search Teams' ),
				  'not_found'          => __( 'No Teams found' ),
				  'not_found_in_trash' => __( 'No Teams found in Trash' ),
			  ),
			  'supports'      => array(
				  'title',
				  'thumbnail',
			  ),
			  'has_archive'   => true,
			  'menu_position' => 10,
			  'public'        => true,
			  'rewrite'       => array( 'slug' => 'teams' ),
			  'taxonomies'    => array( 'department' )
		  )
	  );
  }


	  add_action( 'init', 'add_custom_taxonomy', 0 );

	  function add_custom_taxonomy() {
		  register_taxonomy( 'department', 'Teams', array(
			  'hierarchical' => true,
			  'labels'       => array(
				  'name'              => _x( 'Department', 'taxonomy general name' ),
				  'singular_name'     => _x( 'Department', 'taxonomy singular name' ),
				  'search_items'      => __( 'Search Department' ),
				  'all_items'         => __( 'All Department' ),
				  'parent_item'       => __( 'Parent Department' ),
				  'parent_item_colon' => __( 'Parent Department:' ),
				  'edit_item'         => __( 'Edit Department' ),
				  'update_item'       => __( 'Update Department' ),
				  'add_new_item'      => __( 'Add New Department' ),
				  'new_item_name'     => __( 'New Department Name' ),
				  'menu_name'         => __( 'Departments' )
			  ),
			  'rewrite'      => array(
				  'slug'         => 'department',
				  'with_front'   => false,
				  'hierarchical' => true,
			  ),
		  ) );
	  }
