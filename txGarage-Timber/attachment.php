<?php get_header();

$context = Timber::get_context();
$posts = Timber::get_posts();
$context['post'] = $posts[0]; ?>

<main class="main-warp" role="main">

<?php Timber::render('attachment.twig', $context); ?>

<?php Timber::render('components/prefered-box.twig', $context); ?>

<aside class="sidebar sidebar--homepage">
  <?php dynamic_sidebar('homepage'); ?>
</aside>

<aside class="sidebar sidebar--ads">
  <?php dynamic_sidebar('ads'); ?>
</aside>

</main>

<?php get_footer(); ?>
