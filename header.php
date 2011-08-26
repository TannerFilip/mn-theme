<!doctype html>
<html>
	<head>
		<title><?php bloginfo("name"); ?><?php wp_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/html5reset-1.6.1.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/fonts/museosans_500_macroman/stylesheet.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" media="screen">
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="center">
				<nav><?php dynamic_sidebar("Navigation"); ?></nav>
				<a href="<?php echo get_option("home"); ?>">
					<img alt="" src="<?php bloginfo("template_url"); ?>/img/logo.png">
					<h1><?php bloginfo("name"); ?></h1>
				</a>
