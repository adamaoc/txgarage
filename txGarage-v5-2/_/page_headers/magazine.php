<?php

?>
<div id="archive-top">
	<div id="top-info-box">
		<h1>The txGarage Magazine</h1>
		<p>Looking for a new way to enjoy txGarage articles? You can now order a magazine with some of our top reviews and more behind the scenes info about txGarage. The magazine is offered in full print (that includes a digital copy) or only as a digital copy. This is great for local dealers or shops who are looking for some great, local content for waiting rooms!</p>

		<p>You can pick up a copy today for a reasonable price and a digital copy is even cheaper!</P>

		<p>We will be publishing txGarage Magazine in monthly issues as long as we’re getting good feedback. So jump on and order some today!</p>
		<p>If you are a Texas based business who is interested in advertising with txGarage, please use the contact form below and add "advertising" in the subject.</p>
	</div>
	
	
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
	
	<div class="clear"></div>
</div><!-- off archive top -->

<div class="divider"></div>
<?php wp_reset_query(); ?>