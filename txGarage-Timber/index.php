<?php get_header(); ?>
<?php
	// Timber Setup
	$context = Timber::get_context();
	$context['hero'] = Timber::get_posts('posts_per_page=1');
	$context['posts'] = Timber::get_posts('offset=1');
?>

	<div class="hero-wrap hero-wrap-homepage insta-box">
		<?php Timber::render('homepage-hero.twig', $context);  ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter insta-box__default">
				<div class="social-wrapper">

					<?php dynamic_sidebar('social'); ?>
				</div>
			</div>
		</div>

	</div>

	<?php Timber::render('components/blog-slogan.twig', $context); ?>

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


<?php get_footer(); ?>
