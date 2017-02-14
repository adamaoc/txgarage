<?php
$dir = get_bloginfo('template_directory');
get_header(); ?>

<main class="main-warp" role="main">

<?php
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
	Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);
}
?>

</main>

<?php //Timber::render('/components/post-img-gallery.twig'); ?>

<script src="<?= $dir ?>/src/js/widgets/header-menu.js"></script>
<script src="<?= $dir ?>/src/js/widgets/author-byline-social.js"></script>

<?php get_footer(); ?>
