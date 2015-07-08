<?php get_header(); ?>
<?php
  // Timber Setup
  $context = array();
  $context['posts'] = Timber::get_posts();
?>
<div class="hero-wrap hero-wrap-review insta-box">
  <div class="insta-box__wrapper">
    <div id="instafeed"></div>
    <div class="insta-box__filter insta-box__default"></div>
  </div>
</div>

<section class="content-wrapper">
    <div class="limit-wrapper">
      <h2>Seach for: <span><?= $s ?></span></h2>
    </div>
</section>

<section class="post-list">
  <?php
      Timber::render('blog-list.twig', $context); ?>
</section>

<aside class="sidebar--ads">
  <?php dynamic_sidebar('ads'); ?>
</aside>

<?php get_footer(); ?>
