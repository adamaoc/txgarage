<?php get_header(); ?>

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

	<script src="<?php bloginfo('template_directory'); ?>/src/js/widgets/header-menu.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/src/js/widgets/author-byline-social.js"></script>
</main>
<?php get_footer(); ?>
