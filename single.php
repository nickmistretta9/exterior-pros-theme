<?php get_header(); ?>
<section class="main-content">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<div class="col-sm-8 content blog-content" id="post-<?php the_ID(); ?>">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
			
			<?php the_content(); ?>
			
			<div class="tags"><?php the_tags('<i class="fa fa-tags"></i> ', ', '); ?></div>

			<div class="post-nav"><?php previous_post_link('Previous Post: %link'); ?> | <?php next_post_link('Next Post: %link'); ?></div>
			
			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
		<div class="col-sm-4 sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>