<?php
/*
Template Name: Home Page
*/
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<section class="hero">
	<div class="hero-slider">
		<?php 
		    $args = array( 'post_type' => 'home-slide', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page = -1' );
		    $loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();
		
		    $slide = types_render_field( "slide", array("raw"=>"html") );
		    $title = types_render_field("title", array("raw"=>"true"));
		    $description = types_render_field("description", array("raw"=>"true"));
		    $link = types_render_field("url", array("raw"=>"true"));
		?> 
		<a href="<?php echo $link ?>"><div>
			<?php echo $slide ?>
			<div class="caption">
				<p class="h2"><?php echo $title ?></p>
				<p class="desc"><?php echo $description ?></p>
			</div>
		</div></a>

		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="overlay"></div>
</section>
<section class="services">
	<div class="container-fluid">
		<div class="row">
			<!--  data-aos-duration="1800" data-aos-once="true" data-aos-delay="700" data-aos="fade-right" -->
			<div class="col-sm-4">
				<div class="service-image">
					<a href="roofing.php"><div class="overlay"></div>
					<img src="<?php bloginfo('template_directory'); ?>/images/roofing-service.jpg"></a>
				</div>
				<p class="subtitle"><a href="roofing.php">Roofing</a></p>
				<p class="desc">Call us today and have one of our consultants out. They will measure your roof, go over the various product options available, and give you an exact price to the penny. We are known across the area for our great crews, great service, and best of all, our price.</p>
				<button class="btn-sm btn-primary"><a href="<?php the_permalink(28); ?>">Learn More</a></button>
			</div>
			<div class="col-sm-4">
				<div class="service-image">
					<a href="#"><div class="overlay"></div>
					<img src="<?php bloginfo('template_directory'); ?>/images/window-service.jpg"></a>
				</div>
				<p class="subtitle"><a href="#">Windows</a></p>
				<p class="desc">Exceptional craftsmanship and remarkable energy-saving performance—Berkshire Elite is everything you’re looking for in a quality replacement window, and more. </p>
				<button class="btn-sm btn-primary"><a href="<?php the_permalink(20); ?>">Learn More</a></button>
			</div>
			<div class="col-sm-4">
				<div class="service-image">
					<a href="#"><div class="overlay"></div>
					<img src="<?php bloginfo('template_directory'); ?>/images/siding-service.jpg"></a>
				</div>
				<p class="subtitle"><a href="#">Siding, Soffit &amp; Facia</a></p>
				<p class="desc">When we step foot on your property we bring years of experience and superior products. Theres an art to making homes both beautiful and energy-efficient, and with our expert consultants and crews we deliver every time.</p>
				<button class="btn-sm btn-primary"><a href="<?php the_permalink(24); ?>">Learn More</a></button>
			</div>
		</div>
	</div>
</section>
<section class="main-content" id="post-<?php the_ID(); ?>">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<h1>Welcome To <span>Exterior Pros</span></h1> <hr>
		<div class="row">
			<div class="col-sm-8 content" data-mh>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<button class="btn-primary"><a href="<?php the_permalink(8); ?>">Learn More</a></button>
			</div>
			<div class="col-sm-4 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="van-area">
			<img src="<?php bloginfo('template_directory'); ?>/images/van.png" class="van">
			<img src="<?php bloginfo('template_directory'); ?>/images/wheel.png" class="front-wheel" alt="">
			<img src="<?php bloginfo('template_directory'); ?>/images/wheel.png" class="back-wheel" alt="">
		</div>
		<div class="van-small">
			<img src="<?php bloginfo('template_directory'); ?>/images/van-full.png">
		</div>
	</div>
</section>
<section class="awards">
	<div class="overlay"></div>
	<div class="container-fluid">
		<p class="title">Our Clients Love Us, So Will You</p>
		<div class="row">
			<div class="col-xs-4"><img src="<?php bloginfo('template_directory'); ?>/images/angies1.png" class="first" alt=""></div>
			<div class="col-xs-4"><img src="<?php bloginfo('template_directory'); ?>/images/angies2.png" alt=""></div>
			<div class="col-xs-4"><img src="<?php bloginfo('template_directory'); ?>/images/angies3.png" alt=""></div>
		</div>
		<div class="testimonials">
			<div class="test-slider">
				<?php 
				    $args = array( 'post_type' => 'testimonial', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page = -1' );
				    $loop = new WP_Query( $args );
				    while ( $loop->have_posts() ) : $loop->the_post();
				
				    $review = types_render_field( "review", array("raw"=>"true") );
				    $author = types_render_field("author", array("raw"=>"true"));
				    $service = types_render_field("service", array("raw"=>"true"));
				?> 
				<div>
					<div class="test-outer" data-mh>
						<p class="testimonial"><?php echo $review ?></p>
					</div>
					<p class="author">- <?php echo $author ?> <br> <span><?php echo $service ?></span></p>
					<div class="clearfix"></div>
				</div>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
<section class="service-areas">
	<div id="map"></div>
	<div class="container-fluid">
		<div class="areas">
			<p class="h3">Areas We Serve</p>
			<div class="scrollBox">
				<ul>
					<li>Waukesha, WI</li>
					<li>Milwaukee, WI</li>
					<li>Washington, WI</li>
					<li>Ozaukee, WI</li>
					<li>Racine, WI</li>
					<li>Kenosha, WI</li>
					<li>Walworth, WI</li>
					<li>Dodge, WI</li>
					<li>Jefferson, WI</li>
					<li>Columbia, WI</li>
					<li>Dane, WI</li>
					<li>Rock, WI</li>
				</ul>
				<p><em>This is just a partial list.</em><br><strong>Don't see your town listed?</strong> Give us a call! We service ALL of the Milwaukee, WI area.</p>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php get_footer(); ?>