<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>

<section class="main-content">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<div class="col-sm-12 content inner-content">
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<div class="row">
				<?php 
				    $args = array( 'post_type' => 'gallery-image', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page = -1' );
				    $loop = new WP_Query( $args );
				    while ( $loop->have_posts() ) : $loop->the_post();
				
				    $image = types_render_field( "gallery_img", array("raw"=>"html") );
				?> 
				<div class="col-sm-3 popup-gallery">
					<a href="<?php wp_get_attachment_url($image); ?>"><?php echo $image ?></a>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
</section>

<?php get_footer(); ?>