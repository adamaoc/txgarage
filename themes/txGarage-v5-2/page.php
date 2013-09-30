<?php get_header(); ?>

<?php /* If this page is magazine */ if (is_page('magazine')) { ?>
	<?php include("_/page_headers/magazine.php"); ?>
	<?php } ?>

<div id="inner-bottom-wrap">
	<div id="inner-main">
		<div class="inner-content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>

		<?php endwhile; endif; ?>

	</div><!-- off main content -->
</div><!-- off inner main wrap -->	
	
<?php get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off inner bottom wrap  -->

<?php get_footer(); ?>
