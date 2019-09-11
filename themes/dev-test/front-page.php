<?php get_header(); ?>

<!-- Hero & Tera Slider-->
<section class="slider">
	<ul class="slides">
		<!-- Slide-->
		<li class="slide">
			<!-- Background-->
			<div class="hero fs">
				<div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/office/03.jpg'; ?>);" class="bg parallax"></div>
				<div class="container text-center offset-top">
					<!-- Content-->
					<div class="content">
						<h1 class="lg">We're creatives</h1>
					</div>
				</div>
			</div>
		</li>
		<!-- Slide-->
		<li class="slide dark">
			<!-- Background-->
			<div class="hero fs vcenter">
				<div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/office/01.jpg'; ?>);" class="bg faded parallax"></div>
				<div class="container text-center">
					<!-- Content-->
					<div class="content">
						<h1 class="lg">Creative Digital Agency</h1>
						<h3>We are here to help.</h3>
					</div>
				</div>
			</div>
		</li>
		<!-- Slide-->
		<li class="slide dark">
			<!-- Background-->
			<div class="hero fs vbottom">
				<div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/office/02.jpg'; ?>);" class="bg faded-subtle parallax"></div>
				<div class="container">
					<!-- Content-->
					<div class="content">
						<h4>Design is our passion, we love, share, make and breathe it.</h4>
					</div>
				</div>
			</div>
		</li>
	</ul>
</section>
 <?php if(have_rows('flex_content')) : ?>
    <?php  while ( have_rows('flex_content') ) : the_row(); ?>
     <?php if( get_row_layout() == 'flex_c_block' ): ?>

        <section>
	    <div class="container content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-block">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <h5><?php the_sub_field('subtitle'); ?></h5>
                    </div>
                    <p><?php the_sub_field('content'); ?></p>
                </div>
            </div>
	    </div>
        </section>
     <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<section class="top-line">
	<div class="container content text-center">
		<div class="row">
			<div class="col-md-3 service">
				<div class="icon ion-lightbulb item"></div>
				<h4>Concept</h4>
				<p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-md-3 service">
				<div class="icon ion-camera item"></div>
				<h4>Photography</h4>
				<p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-md-3 service">
				<div class="icon ion-monitor item"></div>
				<h4>Design</h4>
				<p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-md-3 service">
				<div class="icon ion-pizza item"></div>
				<h4>Great food</h4>
				<p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</section>
<section class="content gray">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<div class="intro">
					<h2>A fantastic price</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="plan item">
							<h3>Silver</h3>
							<div class="price">&euro; 20 <span>/m</span></div>
							<ul>
								<li><strong>Basic support</strong></li>
								<li><strong>Basic features</strong></li>
								<li><strong>Basic documentation</strong></li>
								<li>10 Iterations</li>
								<li>Basic concept</li>
								<li>10 Websites</li>
								<li>1TB Bandwidth</li>
							</ul><a href="#" class="btn btn-default">View plan</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="plan highlighted item">
							<h3>Gold</h3>
							<div class="price">&euro; 40 <span>/m</span></div>
							<ul>
								<li><strong>Premium support</strong></li>
								<li><strong>Premium features</strong></li>
								<li><strong>Premium documentation</strong></li>
								<li>25 Iterations</li>
								<li>Premium concept</li>
								<li>25 Websites</li>
								<li>2.5TB Bandwidth</li>
							</ul><a href="#" class="btn btn-default">View plan</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="plan item">
							<h3>Diamond</h3>
							<div class="price">&euro; 55 <span>/m</span></div>
							<ul>
								<li><strong>Unlimited support</strong></li>
								<li><strong>Unlimited features</strong></li>
								<li><strong>Unlimited documentation</strong></li>
								<li>Unlimited Iterations</li>
								<li>Unlimited concept</li>
								<li>Unlimited Websites</li>
								<li>Unlimited Bandwidth</li>
							</ul><a href="#" class="btn btn-default">View plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="intro">
			<h3>Work</h3>
		</div>
		<!-- Portfolio grid-->
		<div class="grid">
			<div class="grid-sizer"></div>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/07.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Photography + Video</div>
                    <div class="description">
                        <h4>Land of God</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/02.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Design + Art Direction</div>
                    <div class="description">
                        <h4>Weekly Planner</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item tall">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/03.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Design + Art Direction</div>
                    <div class="description">
                        <h4>Suit Inc.</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/04.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Drone + Photography</div>
                    <div class="description">
                        <h4>Life on Mars </h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/05.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Design + Architecture</div>
                    <div class="description">
                        <h4>Concept</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item large">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/06.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Photography</div>
                    <div class="description">
                        <h4>Land of God #2</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/portraits/02.jpg'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Photography</div>
                    <div class="description">
                        <h4>She</h4>
                        <p>Lorem ipsum dolor.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/08.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Design + Art Direction</div>
                    <div class="description">
                        <h4>Concept</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/09.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Architecture + Art Direction</div>
                    <div class="description">
                        <h4>The Architect</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid-item wide">
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/dist/assets/thumbs/10.png'; ?>)" class="thumb"></div>
                <div class="caption">
                    <div class="type">Photography + Art Direction</div>
                    <div class="description">
                        <h4>The Drive of Your Life</h4>
                        <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
