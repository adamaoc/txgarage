<?php get_header(); ?>
<?php
	// Timber Setup
	$context = Timber::get_context();
	$context['hero'] = Timber::get_posts('posts_per_page=1');
	$context['posts'] = Timber::get_posts('offset=1');
	$context['theme'] = $context['site']->theme;
?>

<main class="main-warp main-wrap--homepage" role="main">
	<?php Timber::render('homepage-hero.twig', $context);  ?>


	<?php Timber::render('components/blog-slogan.twig', $context); ?>

	<div class="social-wrapper">
		<?php dynamic_sidebar('social'); ?>
	</div>

	<section class="post-list">
		<?php Timber::render('blog-list.twig', $context); ?>
		<!-- <a href="#" class="btn btn--dim">View More
		<svg class="icon">
			<use xlink:href="#icon-arrow-right">
		</svg>
		</a> -->
	</section>

	<?php Timber::render('components/prefered-box.twig', $context); ?>


	<aside class="sidebar sidebar--homepage">
		<?php dynamic_sidebar('homepage'); ?>
	</aside>

	<aside class="sidebar sidebar--ads">
		<?php dynamic_sidebar('ads'); ?>
	</aside>

</main>
<?php get_footer(); ?>
