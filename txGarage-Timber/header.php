<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta name="google-site-verification" content="snTnNu_9--HnI9ISHZ7j-Pa8X3LWQEPljfrUnpAVDn0" />

        <!-- linkup Favicon and apple icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/assets/favicons/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	<?php require_once "assets/SVGSprite.php"; ?>
	<nav class="txG-header-nav">
		<div class="txG-header-nav__logo">
			<a href="/" class="logo--wrap">
				<span class="logo__txsvg"><?php require_once "assets/tx-logo.php"; ?></span>
				<span class="logo__text"><span>tx</span>Garage</span>
			</a>
		</div>
		<?php wp_nav_menu( array('menu' => 'main-menu')); ?>
	</nav>

<? /*
	<header class="site-header--wrapper">
		<div class="site-header">
			<span class="logo">
				<a href="<?php echo get_option('home'); ?>">
					<svg class="icon-logo">
						<use xlink:href="#icon-txgarage-logo">
					</svg>
				</a>
			</span>
			<nav class="site-nav">
				<button class="menu-toggle"><span></span><span></span><span></span></button>
							<?php wp_nav_menu( array('menu' => 'main-menu')); ?>
			</nav>
		</div>
	</header>
*/ ?>
