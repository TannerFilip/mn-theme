<?php get_header(); ?>
<?php if (have_posts()) { ?>
<h1>&#8250;</h1><h1><?php the_title(); ?></h1>
<?php } ?>
			</div>
		</header>
		<section>
			<div class="center">
				<?php get_sidebar(); ?>
					<aside class="left">
					</aside>
					<div class="content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="all">
							<article class="article">
							<?php the_content(); ?>
							</article>
						</article>
					<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
