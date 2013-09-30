<?php get_header(); ?>

	<?php if (have_posts()) : ?>

<div id="archive-top">
	<div id="top-info-box">
		<h1>All Search Results Found</h1>
		<p>Thanks for searching txGarage - if you are not finding what you're looking for feel free to send us a message on one of our many social sites or click on the contact page.</p>
	</div>
	
	<div class="archive-reviews">
	<?php query_posts('cat=11&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="new-review">
	  	<div class="img-crop">
	  		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" />
	  	</div>
			<a href="<?php the_permalink(); ?>" class="slide-box" title="<?php the_title(); ?> Recently Posted Review by txGarage">
	    	<h2>
	      	<?php the_title(); ?>
	      </h2>
	      <span>read more...</span>
	   	</a>
		</div>
	<?php endwhile; endif; ?>
	</div>
	<div class="clear"></div>
</div><!-- off archive top -->

<?php wp_reset_query(); ?>

<div class="divider"></div>

<div id="home-bottom-wrap">
	<div id="home-main">
		<div class="main-content">

		<?php while (have_posts()) : the_post(); ?>

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

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
	</div><!-- off main content -->
</div><!-- off home main wrap -->		

<?php get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off home bottom wrap  -->

<?php get_footer(); ?>
