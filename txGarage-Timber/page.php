<?php

get_header();

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
// echo "<pre>";
// print_r($context['post']);
// echo "</pre>";

$context['global_sidebar'] = Timber::get_widgets('global');
$context['ads_sidebar'] = Timber::get_widgets('ads');

Timber::render(array('page-' . $post->ID . '.twig', 'page-' . $post->post_type . '.twig', 'page.twig'), $context);

get_footer(); ?>
