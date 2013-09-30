<?php

?>
<div id="archive-top">
	<div id="top-info-box">
		<h1>All Reviews on txGarage</h1>
		<p>At txGarage, we take pride in our reviews and do our best to express our opinions on the vehicle in question. Vehicles are provided by many different sources, and all reviews are completely honest. We do not get paid by any manufacturer to review cars.</p>

		<p>On average, we try to spend a week with the car for a "full review" and we subject it to many tests. Such tests include fuel economy, highway driving, country road driving, inner-city driving, and in some cases off-road driving. We know the weather and terrain that the average Texan lives in and we try and bring these experiences into our reviews and tests.</p>
	</div>
	
	<div class="archive-reviews">
		<?php query_posts('cat=3&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
