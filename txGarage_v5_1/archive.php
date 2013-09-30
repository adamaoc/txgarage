<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if (is_category(3)) { 
					include("_/archives/car-reviews.php"); ?>
			
		<?php /* If this is a tag archive */ } elseif (is_category(8)) { 
				include("_/archives/news.php"); ?>
				
		<?php /* If this is a tag archive */ } elseif (is_category(9)) { 
		include("_/archives/quick_drive.php"); ?>
		
		<?php /* If this is a tag archive */ } elseif (is_category(12)) { 
		include("_/archives/video.php"); ?>

		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
			<?php include("_/archives/archives.php"); ?>

		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
			<?php include("_/archives/archives.php"); ?>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
			<?php include("_/archives/archives.php"); ?>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
			<?php include("_/archives/archives.php"); ?>

		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1 class="pagetitle">Author Archive</h1>
			<?php include("_/archives/archives.php"); ?>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<div id="archive-top">
			<div id="top-info-box">
			<h1 class="pagetitle">Blog Archives</h1>
			<?php include("_/archives/archives.php"); ?>
	<?php } ?>

<div id="home-bottom-wrap">
	<div id="home-main">
		<div class="main-content">
			<?php wp_reset_query(); 
				while (have_posts()) : the_post(); ?>
				<div class="info-box">
					<div class="thumb-crop">
						<div class="thumb-wrap">
							<a href="<?php the_permalink(); ?>" 
								title="<?php the_title(); ?> - post by txGarage">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
							</a>
						</div><!-- off thumb wrap -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - post by txGarage">
			      		<?php the_title(); ?>
			     		</a>
			    	</h3>
			    	<p>
			    		<?php echo limit_words(get_the_excerpt(), '45'); ?>…<a href="<?php the_permalink(); ?>">read more</a>
			    	</p>
						<div class="clear"></div>
					</div><!-- off thumb crop -->
				</div><!-- off info box -->

			<?php endwhile; ?>
<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>
			
		<?php else : ?>

			<h2>Nothing found</h2>

	<?php endif; ?>
	</div><!-- off main content -->
</div><!-- off home main wrap -->	
		
<?php get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off home bottom wrap  -->


<?php get_footer(); ?>
