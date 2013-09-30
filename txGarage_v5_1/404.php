<?php get_header(); ?>

<div id="inner-wrap">

<div id="home-bottom-wrap">
	<div id="home-main">
		
		<h2>ooops… Something went wrong. <br />
		<?php _e('Error 404 - Page Not Found','html5reset'); ?></h2>
		
		<div class="main-content">
			<h2>Maybe this can help?</h2>
			
			<?php query_posts('cat=11&posts_per_page=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="new-review">
			  	<div class="img-crop">
			  		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" />
			  	</div>
			    <h2>
						<a href="<?php the_permalink(); ?>" class="title" title="<?php the_title(); ?> Recently Posted Review by txGarage">
			      	<?php the_title(); ?>
			   		</a>
			    </h2>
			    <p><?php echo limit_words(get_the_excerpt(), '125'); ?>…<a href="<?php the_permalink(); ?>">read more</a></p>
				</div>
			<?php endwhile; endif; ?>
			
		</div>
</div>
<?php get_sidebar(); ?>

	<div class="clear"></div>
</div>

<?php get_footer(); ?>