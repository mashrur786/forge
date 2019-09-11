<?php
	/*
	 * Temtplate Name : Single.php
	 *
	 */
?>
<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<section class="hero lg vbottom">
	<?php $img_url = get_the_post_thumbnail_url(); ?>
	<div style="background-image: url(<?php echo $img_url ?>);" class="bg parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4 class="date">&mdash; <?php the_date(); ?></h4>
				<h1 class="lg"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="on-foot">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php $prev_post = get_previous_post(); ?>
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="previous-post">
					<div class="arrow">
						<div class="ion-chevron-left"></div>
					</div>
					<div class="content">
						<div class="title">Previous</div>
						<div class="post-title">  <?php echo apply_filters( 'the_title', $prev_post->post_title ); ?> </div>
					</div>
				</a>
			</div>


			<div class="col-md-6">
				<?php $next_post = get_next_post();?>
				<?php if ( is_a( $next_post , 'WP_Post' ) ) : ?>
                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-post">
						<div class="content">
							<div class="title">Next</div>
							<div class="post-title"><?php echo get_the_title( $next_post->ID ); ?> </div>
						</div>
						<div class="arrow">
							<div class="ion-chevron-right"></div>
						</div>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
