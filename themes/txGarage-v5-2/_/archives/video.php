<?php

?>
<div id="archive-top">
	<div id="top-info-box">
		<h1>Videos by txGarage</h1>
		<p>We like videos, and we know our audience likes when we produce videos, so we've dedicated a section of txGarage to point to our latest videos!</p>

		<p>Some of our videos are full or partial reviews and some are made to promote the written article that associates with the vehicle. You also might see some videos made to inform our audience about what's to come at txGarage.</p>

		<p>If you like our videos, please take the time and head to <a href="http://youtube.com/texasgarage" target="_blank" title="txGarage videos on YouTube">YouTube</a> and subscribe to our channel. Also be sure to give us a "thumbs up" and leave us a comment!</p>
	</div>
	
	<div class="archive-reviews">	
		<?php query_posts('cat=12&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
