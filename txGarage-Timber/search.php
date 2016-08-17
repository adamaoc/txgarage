<?php get_header(); ?>
<main class="main-warp" role="main">
  <?php
    $context = array();
    $context = Timber::get_context();
    $context['posts'] = Timber::get_posts();
    $context['search_term'] = $s;
    Timber::render(array('archive-list.twig'), $context);
    Timber::render('components/prefered-box.twig', $context);
  ?>
  <aside class="sidebar sidebar--homepage">
    <?php dynamic_sidebar('homepage'); ?>
  </aside>

  <aside class="sidebar sidebar--ads">
    <?php dynamic_sidebar('ads'); ?>
  </aside>
</main>
<?php get_footer(); ?>
