<?php get_header(); ?>

	<div class="hero-wrap insta-box" data-insta>
		<?php get_template_part('hero'); ?>
	</div>
	<section class="post-list">
		<h2><?php bloginfo('description'); ?><span>For the Texas Automotive Consumer</span></h2>
		<?php get_template_part('query_offset'); ?>
	</section>

	<?php //get_template_part('pagination'); ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
