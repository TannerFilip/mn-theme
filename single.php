<?php get_header(); ?>
			</div>
		</header>
		<section>
			<div class="center">
				<?php get_sidebar(); ?>
					<aside class="left">
							<div class="arrow"><?php previous_post_link("%link", "&#8592;"); ?><?php next_post_link("%link", "&#8594;"); ?></div>
							<div class="day"><?php the_time("d") ?></div>
							<div class="month"><?php the_time("M") ?></div>
							<div class="year"><?php the_time("Y") ?></div>
					</aside>
					<div class="content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="all">
							<article class="article">
							<h1><?php the_title(); ?></h1>
							<h3>by <?php the_author(); ?> at <?php the_time() ?><?php the_tags(" &bull; Tags: "); ?> &bull; Categories: <?php the_category(", "); ?><?php edit_post_link("Edit", " &bull; "); ?></h2>
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
