<!doctype html>
<html>
	<head>
		<title><?php wp_title(); ?> <?php bloginfo("name"); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/html5reset-1.6.1.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="center">
				<a href="<?php echo get_option('home'); ?>">
					<img alt="" src="<?php bloginfo('template_url'); ?>/img/logo.png">
					<h1>moznews.org</h1>
				</a>
			</div>
		</header>
