<?php get_header(); ?>

<?php
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

$context['global_sidebar'] = Timber::get_widgets('global');


// var_dump($post->author());
// $context['wp_title'] .= ' - ' . $post->title();
// $context['comment_form'] = TimberHelper::get_comment_form();

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);
}
?>

<script src="<?php echo get_template_directory_uri(); ?>/src/js/widgets/hero-gallery.js" type="text/jsx"></script>

<?php get_footer(); ?>
