<?php get_header(); ?>

<div id="inner-bottom-wrap">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="extraside">
	<?php $gblBlock = get_post_meta($post->ID, 'good-bad-list', ture);
		if ($gblBlock) { ?>
		<div class="inner-gbl">
			<h4>Quick Look :: <?php the_title(); ?></h4>
		<?php echo $gblBlock //get_post_meta($post->ID, 'good-bad-list', ture); ?>
		</div>
	<?php } ?>
		<div class="metainfo">
			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
		</div>
	</div>
	
	<div id="inner-main">
		<div class="inner-content">	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-content">
				
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
					<p class="tags"><?php the_tags( 'Tags: ', ', ', ''); ?></p>
				</div>
			
			</article>
			<div class="divider"></div>

			<?php comments_template(); ?>
			<p class="extra_tags">texas garage - </p>
			<?php edit_post_link('Edit this entry','','.'); ?>
			<div class="divider"></div>
	<?php endwhile; endif; ?>
	</div><!-- off main content -->
</div><!-- off inner main wrap -->	
	
<?php get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off inner bottom wrap  -->

<?php get_footer(); ?>