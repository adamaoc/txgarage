<?php get_header(); ?>

	<div class="hero-wrap hero-wrap-<?php get_template_part('cat-tab-color');?> insta-box">
		<?php get_template_part('hero-pages'); ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter <?php get_template_part('category-color');?>"></div>
		</div>
	</div>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

	
	<section class="content-wrapper">
		<div>
			
			<h1><?php the_title(); ?></h1>
			<p>
			<?php the_content(); ?>
			</p>
			
		</div>
	</section>
				

<?php endwhile; endif; ?>


<?php get_footer(); ?>