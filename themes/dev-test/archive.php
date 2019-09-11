<?php get_header(); ?>
<section class="hero vbottom behind gray">
    <div class="container">
	    <?php if(have_posts()) : ?>
        <h1><?php single_cat_title(); ?></h1>
        <?php endif; ?>
    </div>
</section>
<section>
    <div class="container">
        <form action="<?php echo admin_url('admin-ajax.php') ?>" method="POST" id="filter">
        <?php
            if( $terms = get_terms( array(
            'taxonomy' => 'category', // to make it simple I use default categories
            'orderby' => 'name'
            ) ) ) :
            // if categories exist, display the dropdown
            echo '<select name="categoryfilter"><option value="">Select category...</option>';
            foreach ( $terms as $term ) :
                if($term->count > 0) :
                    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                endif;
                endforeach;
            echo '</select>';
            endif;
        ?>
            <input type="hidden" name="action" value="catFilter">
            <button>Apply filter</button>
        </form>

    </div>
    <div class="container intro">
        <div id="response" class="grid">
            <div class="grid-sizer"></div>
			<?php while (have_posts()) : the_post(); ?>

			<a href="<?php the_permalink() ?>" class="grid-item">
            <div style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>" class="thumb"></div>
            <div class="caption">
                <div class="type"><?php the_date(); ?></div>
                <div class="description">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
			</a>
	        <?php endwhile; ?>
        </div>
    </div>
</section>
<section class="on-foot">
    <div class="container text-center">
        <div class="btn-group pagination"><a href="#" disabled class="btn previous">
            <div class="ion-chevron-left"></div></a><a href="#" class="btn active">1</a><a href="#" class="btn">2</a><a href="#" class="btn">3</a><a href="#" class="btn">4</a><a href="#" class="btn next">
            <div class="ion-chevron-right"></div></a></div>
    </div>
</section>
<?php get_footer(); ?>
