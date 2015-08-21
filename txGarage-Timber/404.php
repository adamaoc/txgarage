<?php get_header();?>

<?php

    $context = array();
    $context = Timber::get_context();
    $context['posts'] = Timber::get_posts('posts_per_page=6');

    // echo '<pre>';
    // //print_r($context);
    // echo '</pre>';
    $context['title'] = "404 Page Not Found";
    $context['global_sidebar'] = Timber::get_widgets('global');
    $context['ads_sidebar'] = Timber::get_widgets('ads');



?>

<?php Timber::render('filenotfound.twig', $context); ?>

<?php get_footer(); ?>
