<?php get_header(); ?>

	<div class="hero-wrap insta-box" data-insta>
		<?php get_template_part('hero'); ?>
	</div>
	<section class="post-list">
		<h2><?php bloginfo('description'); ?><span>For the Texas Automotive Consumer</span></h2>
		<?php get_template_part('query_offset'); ?>

		<a href="#" class="btn btn--dim">View More</a>
	</section>
	<section class="prefered-box">
		<div class="prefered-wrapp">
			<a href="/prefered/" class="prefered__dealers">
				<div class="prefered--icon"></div>
				<div class="prefered--txt">
					<span>Prefered</span>
					<h4>Dealers</h4>
				</div>
			</a>
			<a href="/prefered/" class="prefered__shops">
				<div class="prefered--icon"></div>
				<div class="prefered--txt">
					<span>Prefered</span>
					<h4>Shops</h4>
				</div>
			</a>
			<a href="/prefered/" class="prefered__sponsors">
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
