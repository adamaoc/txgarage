<?php get_header(); ?>

<main class="main-warp" role="main">

<?php
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

$context['global_sidebar'] = Timber::get_widgets('global');
$context['ads_sidebar'] = Timber::get_widgets('ads');

Timber::render(array('page-' . $post->ID . '.twig', 'page-' . $post->post_type . '.twig', 'page.twig'), $context);
?>

</main>
<?php get_footer(); ?>
