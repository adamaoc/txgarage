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
	<?php require_once "assets/SVGSprite.php"; ?>
	<header class="site-header">
        <span class="logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></span>
		<nav class="site-nav">
            <?php wp_nav_menu( array('menu' => 'main-menu')); ?>
		</nav>
	</header>

	<main class="main-warp" role="main">

