<?php

?>
<div id="home-top-wrap">
<div class="new-review">
	<?php query_posts('cat=3&posts_per_page=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<div class="img-crop">
  		<?php the_post_thumbnail('medium'); ?>
  	</div>
		<a href="<?php the_permalink(); ?>" class="slide-box" title="<?php the_title(); ?> Recently Posted Review by txGarage">
    	<h2>
      	<?php the_title(); ?>
      </h2>
      <span>read more...</span>
   	</a>
	<?php endwhile; endif; ?>
</div>

<div class="new-news">
	<?php query_posts('cat=8&posts_per_page=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<div class="img-crop">
  		<?php the_post_thumbnail('medium'); ?>
  	</div>
		<a href="<?php the_permalink(); ?>" class="slide-box" title="<?php the_title(); ?> Recently Posted News Article by txGarage">
    	<h2>
      	<?php the_title(); ?>
      </h2>
      <span>read more...</span>
   	</a>
	<?php endwhile; endif; ?>
</div>

<div class="clear"></div>

<div class="new-video">
	<?php query_posts('cat=12&posts_per_page=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="img-crop">
  		<?php the_post_thumbnail('medium'); ?>
  	</div>
		<a href="<?php the_permalink(); ?>#video" class="slide-box" title="<?php the_title(); ?> Recently Posted Video by txGarage">
    		<h2>
      			<?php the_title(); ?>
      		</h2>
      		<span>read more...</span>
   		</a>
	<?php endwhile; endif; ?>
</div>

<div class="home-social">
	<?php wp_nav_menu( array('menu' => 'social-nav' )); ?>
</div>

<div class="clear"></div>
</div>

<div class="divider"></div>


<div id="home-bottom-wrap">