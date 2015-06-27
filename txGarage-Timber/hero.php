<section class="hero">
<?php $query = new WP_Query( 'posts_per_page=1' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<?php 
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); }
	
$catList = get_the_category();
$category = catClass($catList);
?>
<div class="img-wrap <?php get_template_part('cat-tab-color');?>" style="background-image: url(<?= $large_image_url[0]; ?>);">
    <div class="aspectbox"></div>
    <div class="cat-tab">
       <?php 
       if (in_category('News')) { ?>
       <svg class="icon"><use xlink:href="#icon-file-text2"></use></svg> News <?php
       } elseif(in_category('Car Reviews')) { ?>
       	<svg class="icon"><use xlink:href="#icon-bubble2"></use></svg> Reviews
       	<?php
       } else {
       	echo "Video";
       }
       ?>
    </div>
  </div><div class="content-card <?php get_template_part('cat-tab-color');?>">
    <div class="topbox">
      <h2><?php the_title(); ?></h2>
      <div class="meta">
        <svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg>
        by <?php the_author(); ?></div>
    </div>
    <div class="excerpt">
      <p><?php echo limit_words(get_the_excerpt(), '35'); ?></p>
      <a href="<?php the_permalink() ?>" rel="bookmark" class="readmorebtn" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a>
    </div>
  </div>

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
 </section>
