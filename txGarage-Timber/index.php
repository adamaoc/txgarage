<?php get_header(); ?>
<?php 
	// Timber Setup
	$context = array();
	$context['hero'] = Timber::get_posts('posts_per_page=1');
	$context['posts'] = Timber::get_posts('offset=1');
?>
	<div class="hero-wrap hero-wrap-homepage insta-box">
		<?php 
			Timber::render('homepage-hero.twig', $context);
		//get_template_part('hero'); ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter insta-box__default"></div>
		</div>
	</div>

	<section class="blog-slogan">
		<h2>News. Reviews. Passion.<span>For the Texas Automotive Consumer</span></h2>
	</section>

	<section class="post-list">
		<?php 
		Timber::render('blog-list.twig', $context);
		//get_template_part('query_offset'); 
		?>

		<a href="#" class="btn btn--dim">View More</a>

	</section>

	<aside class="sidebar--ads">
		<?php dynamic_sidebar('ads'); ?> 	
	</aside>	

	<section class="prefered-box">
		<div class="prefered-wrapp">
			<a href="<?php echo get_option('home'); ?>/prefered/" class="prefered__dealers">
				<div class="prefered--icon"></div>
				<div class="prefered--txt">
					<span>Prefered</span>
					<h4>Dealers</h4>
				</div>
			</a>
			<a href="<?php echo get_option('home'); ?>/prefered/" class="prefered__shops">
				<div class="prefered--icon"></div>
				<div class="prefered--txt">
					<span>Prefered</span>
					<h4>Shops</h4>
				</div>
			</a>
			<a href="<?php echo get_option('home'); ?>/prefered/" class="prefered__sponsors">
				<div class="prefered--icon"></div>
				<div class="prefered--txt">
					<span>txGarage</span>
					<h4>Sponsors</h4>
				</div>
			</a>
		</div>
	</section>

	<?php //get_template_part('pagination'); ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
