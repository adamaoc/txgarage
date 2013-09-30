<?php

?>
<div id="archive-top">
	<div id="top-info-box">
		<h1>Our Quick Drive Reviews</h1>
		<p>We like to separate our reviews on how much time we were able to spend with the car. For a great number of our reviews, we are able to spend an entire week driving the vehicle and getting to know it's ins-and-outs. Sometimes we're not as fortunate. We may only get around 10-15 minutes or a few hours with the car.</p>

		<p>Usually this happens during vehicle launches or big events. While attending these events, we try and keep in mind that these reviews will only be our first impressions of the vehicle, and as such, we want our readers to know.</p>
	</div>
	
	<div class="archive-reviews">	
		<?php query_posts('cat=9&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="new-review">
		  	<div class="img-crop">
		  		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<?php the_post_thumbnail('medium'); ?>
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

<div class="divider"></div>
