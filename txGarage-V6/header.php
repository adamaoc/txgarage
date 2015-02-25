<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php // Title tag must follow specific SEO rules ?>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
        <!-- linkup Favicon and apple icons -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php // Description tag must follow specific SEO rules ?>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<header class="site-header">
		<span class="logo">txGarage</span>
		<nav class="site-nav">
			<ul>
				<li><a href="/categories/reviews/">Reviews</a></li>
				<li><a href="/categories/reviews/">News</a></li>
				<li><a href="/categories/reviews/">QuickDrive</a></li>
				<li><a href="/categories/reviews/">Video</a></li>
				<li><a href="/categories/reviews/">Events</a></li>
			</ul>
		</nav>
	</header>

	<main class="main-warp" role="main">

