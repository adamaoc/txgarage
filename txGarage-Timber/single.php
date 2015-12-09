<?php get_header(); ?>

<?php
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['theauthor'] = $post->author();
$context['authorJson'] = json_encode($post->author());
// echo "<pre>";
// print_r($context['theauthor']);
// echo "</pre>";
$context['global_sidebar'] = Timber::get_widgets('global');
$context['ads_sidebar'] = Timber::get_widgets('ads');
// $context['comment_form'] = TimberHelper::get_comment_form();

Timber::render('post-object.twig', $context);

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);
}
?>
<?php
//<script src="-php- echo get_template_directory_uri(); - - /src/js/widgets/hero-gallery.js" type="text/jsx"></script>
?>
<?php get_footer(); ?>
