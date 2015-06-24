<?php get_header(); ?>
<div class="hero-wrap hero-wrap-<?php get_template_part('cat-tab-color');?> insta-box">
  <div class="insta-box__wrapper">
    <div id="instafeed"></div>
    <div class="insta-box__filter <?php get_template_part('category-color');?>"></div>
  </div>
</div>

<section class="content-wrapper">
    <div class="full-wrapper">
      <h2>Seach for: <span><?= $s ?></span></h2>
    </div>
</section>
<section class="post-list">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
      $catList = get_the_category();
      $category = catClass($catList);
    ?>
      <div class="post-block">
        <a href="<?php the_permalink() ?>" rel="bookmark" class="" title="Permanent Link to <?php the_title_attribute(); ?>">
        
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
        </a>
      </div>
    <?php endwhile; ?>
  <?php else : ?>

    <h2>No posts found.</h2>

  <?php endif; ?>

<?php //get_sidebar(); ?>
</section>

<?php get_footer(); ?>
