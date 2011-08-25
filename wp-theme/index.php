<?php get_header(); ?>
		<section>
			<div class="center">
				<aside class="right">
					<img src="http://placekitten.com/g/136/400">
				</aside>
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
