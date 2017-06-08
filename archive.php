<?php get_header(); ?>

<section class="main-content">
	<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
	<div class="container-fluid">
		<div class="col-sm-8 content blog-content" id="post-<?php the_ID(); ?>">
			<?php if (have_posts()) : ?>

				<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
				<?php if (is_category()) { ?>
				<h1>Archive for the &ldquo;<?php single_cat_title(); ?>&rdquo; Category</h1>

				<?php } elseif(is_tag()) { ?>
				<h1>Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>

				<?php } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

				<?php } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

				<?php } elseif (is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>

				<?php } elseif (is_author()) { ?>
				<h1>Author Archive</h1>

				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>

			<?php } ?>
			<?php while (have_posts()) : the_post(); ?>

			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="data">Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				<?php the_excerpt(); ?>
				<a class="btn btn-info btn-sm" href="<?php the_permalink() ?>">Read More</a>
				<div class="tags"><?php the_tags('<i class="fa fa-tags"></i> ', ', '); ?></div>
			</article>

			<?php endwhile; ?>

			<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>

			<?php else : ?>

			<h1>Not Found</h1>
			<p>Sorry, but the requested resource was not found on this site.</p>

			<?php endif; ?>
		</div>
		<div class="col-sm-4 sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>