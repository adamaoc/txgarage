<?php
/*
Template Name: basic_page
*/
get_header();
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['theauthor'] = $post->author();
$context['global_sidebar'] = Timber::get_widgets('global');
$context['ads_sidebar'] = Timber::get_widgets('ads');

Timber::render('post-object.twig', $context);

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	Timber::render(array('page-' . $post->ID . '.twig', 'page-' . $post->post_type . '.twig', 'page.twig'), $context);
}
// echo "<pre>";
// print_r($post);
// echo "</pre>";
get_footer();
?>
