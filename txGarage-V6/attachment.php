<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>" />
      <h2 style="text-align: center"><?php the_title(); ?></h2> 
      <p class="tags"><?php the_tags( 'Tags: ', ', ', ''); ?></p>
    </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>

