<?php get_header();?>
<main class="main-warp" role="main">
<?php
    $context = array();
    $context = Timber::get_context();
    $context['posts'] = Timber::get_posts('posts_per_page=6');
    $context['title'] = "404 Page Not Found";
    $context['global_sidebar'] = Timber::get_widgets('global');
    $context['ads_sidebar'] = Timber::get_widgets('ads');
?>

<?php Timber::render('filenotfound.twig', $context); ?>
</main>
<?php get_footer(); ?>
