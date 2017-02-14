<?php
/*
Template Name: basic_page
*/
get_header();
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['theauthor'] = $post->author();
// $context['global_sidebar'] = Timber::get_widgets('homepage');
$context['ads_sidebar'] = Timber::get_widgets('ads');

Timber::render('post-object.twig', $context);

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	Timber::render(array('basic-page-' . $post->ID . '.twig', 'basic-page-' . $post->post_type . '.twig', 'basic-page.twig'), $context);
}
// echo "<pre>";
// print_r($_GET);
// echo "<br><hr>";
// print_r($post);
// echo "</pre>";
get_footer();
?>
