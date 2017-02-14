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

	<div class="main-wrap__top-list">
		<?php Timber::render('components/blog-slogan.twig', $context); ?>

		<div>
			<div class="social-wrapper">
				<h4>Be Social:</h4>
				<div class="social-wrapper__inner-wrap">
					<?php dynamic_sidebar('social'); ?>
				</div>
			</div>
		</div>

		<div class="calendar-wrapper">
			<div class="calendar-wrapper__inner-wrap">
				<h4>Local Events:</h4>
				<a href="/event-calendar/">
					<div class="calendar-wrapper__icon">
						<svg width="25" height="25" viewBox="0 0 32 32">
							<path d="M10 12h4v4h-4zM16 12h4v4h-4zM22 12h4v4h-4zM4 24h4v4h-4zM10 24h4v4h-4zM16 24h4v4h-4zM10 18h4v4h-4zM16 18h4v4h-4zM22 18h4v4h-4zM4 18h4v4h-4zM26 0v2h-4v-2h-14v2h-4v-2h-4v32h30v-32h-4zM28 30h-26v-22h26v22z"></path>
						</svg>
					</div>
					<div class="calendar-wrapper__text">
						Event Calendar
					</div>
				</a>
			</div>
		</div>
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
