<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<!-- <section class="hero inner-hero">
	<?php if (has_post_thumbnail() ) {
		the_post_thumbnail();
	} else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/images/roofing-bg.jpg" alt="Exterior Pros">
	<? } ?>
	<div class="overlay"></div>
	<div class="container-fluid">
		<p class="h1"><?php the_title(); ?></p>
	</div>
</section> -->

<section class="main-content">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<div class="col-sm-8 content contact-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
		<div class="col-sm-4 sidebar">
			<?php get_sidebar(); ?>
		</div>
</section>




	



<?php get_footer(); ?>