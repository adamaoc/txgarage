<?php

?>
<div id="home-main">
	<div class="main-content">
		<h2>Reviews</h2>
		<?php query_posts('cat=3&posts_per_page=5&offset=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="info-box">
				<div class="thumb-crop">
					<div class="thumb-wrap">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - post by txGarage">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
						</a>
					</div>
				</div>
				<h3>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - post by txGarage">
		      	<?php the_title(); ?>
		      </a>
		    </h3>
		    <p>
		    	<?php echo limit_words(get_the_excerpt(), '125'); ?>â€¦<a href="<?php the_permalink(); ?>">read more</a>
		    </p>
			</div>
		<?php endwhile; endif; ?>
		<a href="http://txgarage.com/category/car-reviews/">More Reviews &raquo;</a>
	</div>
	
	<div class="main-content">
		<h2>News</h2>
		<?php query_posts('cat=8&posts_per_page=5&offset=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="info-box">
				<div class="thumb-crop">
					<div class="thumb-wrap">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - post by txGarage">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
						</a>
					</div>
				</div>
				<h3>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - post by txGarage">
		      	<?php the_title(); ?>
		      </a>
		    </h3>
		    <p>
		    	<?php echo limit_words(get_the_excerpt(), '125'); ?>â€¦<a href="<?php the_permalink(); ?>">read more</a>
		    </p>
			</div>
		<?php endwhile; endif; ?>
	
		<a href="http://txgarage.com/category/news/">More News Articles &raquo;</a>
	</div>
	<div class="clear"></div>
</div><!-- off home main content -->

<div class="clear"></div>
</div><!-- off home bottom wrap /initialized in home top -->