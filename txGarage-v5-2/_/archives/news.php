<?php

?>
<div id="archive-top">
	<div id="top-info-box">
		<h1>txGarage Texas Automotive News</h1>
		<p>We work hard at txGarage to look for news stories and events that are breaking or going on within our great state. Sometime we'll post more national or world news if it correlates with a review or something we're just dying to talk about.</p>

		<p>If you have some breaking news stories or an event you think we should post about, please get in contact with us. Our social sites are the quickest and easiest way to do so.</p>
	</div>
	
	<div class="archive-reviews">
		<?php query_posts('cat=8&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
