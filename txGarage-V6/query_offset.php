<?php 
// the query

$the_query = new WP_Query( 'offset=1' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

		$catList = get_the_category();
		$category = catClass($catList);

	?>
		
		<div class="post-block">
			<div class="post-block--title">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="post-block--hero <?= $category ?>">
				<?php the_post_thumbnail(); ?>
				<span>
					<?php 
			       if ($category == "news") { ?>
			       <svg class="icon"><use xlink:href="#icon-file-text2"></use></svg> News <?php
			       } elseif($category == "car-reviews") { ?>
			       	<svg class="icon"><use xlink:href="#icon-bubble2"></use></svg> Reviews
			       	<?php
			       } else {
			       	echo "Video";
			       }
			       ?>
				</span>
			</div>
		</div>

	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>