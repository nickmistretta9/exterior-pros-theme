<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<section class="main-content">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<div class="col-sm-8 content inner-content">
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
		<div class="col-sm-4 sidebar">
			<?php get_sidebar(); ?>
		</div>
</section>

<section class="certifications">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/bbb-cert.png" alt=""></div>
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/angies.png" alt=""></div>
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/owens.png" alt=""></div>
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/nari.png" alt=""></div>
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/menomonee.png" alt=""></div>
			<div class="col-sm-2 col-xs-6"><img src="<?php bloginfo('template_directory'); ?>/images/mba.png" alt=""></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>