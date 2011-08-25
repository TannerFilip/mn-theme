<?php get_header(); ?>
		<section>
			<div class="center">
				<aside class="right">
					<img src="http://placekitten.com/g/136/400">
				</aside>
					<aside class="left">
							<div class="day"><?php the_time('d') ?></div>
							<div class="month"><?php the_time('M') ?></div>
							<div class="year"><?php the_time('Y') ?></div>
						<a href="#comments">
							<img src="<?php bloginfo('template_url'); ?>/img/comments.png" alt="Number of comments:">
							<span class="number-comments"><?php comments_number( "0", "1", "%" ); ?></span>
						</a>
					</aside>
					<div class="content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="all">
							<article class="article">
							<h1><?php the_title(); ?></h1>
							<h3>by <?php the_author(); ?> at <?php the_time() ?><?php edit_post_link("edit", ", "); ?></h2>
							<?php the_content(); ?>
							</article>
							<?php comments_template() ?>
						</article>
					<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
