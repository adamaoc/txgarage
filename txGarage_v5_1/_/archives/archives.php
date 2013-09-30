<?php

?>

		<p>Thanks for searching txGarage - if you are not finding what you're looking for, feel free to send us a message on one of our many social sites or click on the contact page.</p>
		
	</div>
	
	<div class="archive-reviews">	
		<?php query_posts('cat=11&posts_per_page=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
