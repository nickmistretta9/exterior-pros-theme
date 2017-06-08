<?php get_header(); ?>

		<section class="main-content">
			<div class="top"><a href="#top" class="backtotop"><i class="fa fa-arrow-up"></i></a></div>
			<div class="container-fluid">
				<div class="col-sm-8 content blog-content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>">
							<header>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
								<?php the_excerpt(); ?>
							</header>
							<section>
								<a class="btn" href="<?php the_permalink(); ?>">Read More</a>

							</section>
							<footer>
								<div class="tags">
									<p><?php the_tags(); ?></p>
								</div>
							</footer>
						</article>
					<?php endwhile; ?>
					<div class="posts-nav">
						<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-sm-4 sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>

<?php get_footer(); ?>