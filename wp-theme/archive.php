<?php get_header(); ?>
<?php if (is_category()) { ?>
<h1>&#8250;</h1><h1><?php single_cat_title() ?></h1>
<?php } elseif (is_tag()) { ?>
<h1>&#8250;</h1><h1><?php single_tag_title() ?></h1>
<?php } elseif (is_month()) { ?>
<h1>&#8250;</h1><h1><?php the_time('F Y') ?></h1>
<?php } elseif (is_year()) { ?>
<h1>&#8250;</h1><h1><?php the_time('Y') ?></h1>
<?php } ?>
			</div>
		</header>
		<section>
			<div class="center">
			<?php get_sidebar(); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php if( $current_date != get_the_date('d-m-Y') ) : ?>
			<?php if( $current_date != NULL ) echo "</div></div>"; ?>
			<?php $current_date = get_the_date('d-m-Y'); ?>
				<div class="a-days-content">
					<aside class="left">
						<div class="day"><?php the_time('d') ?></div>
						<div class="month"><?php the_time('M') ?></div>
						<div class="year"><?php the_time('Y') ?></div>
					</aside>
					<div class="content">
			<?php endif; ?>
						<a class="titlebox" href="<?php the_permalink(); ?>">
							<h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
							<time><?php the_time(); ?></time>
							<span>Read more &#x2192;</span>
						</a>
			<?php endwhile; ?>
			<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
