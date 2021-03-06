<?php get_header(); ?>

<main class="main-warp" role="main">

<?php
global $wp_query;

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$context['pagination'] = Timber::get_pagination();
if (isset($wp_query->query_vars['author'])){
	$author = new TimberUser($wp_query->query_vars['author']);
	$context['theauthor'] = $author;
	$context['title'] = 'Author Archives: ' . $author->name();
}
Timber::render(array('author.twig', 'archive-list.twig'), $context);
?>

</main>
<script src="<?php bloginfo('template_directory'); ?>/src/js/widgets/author-byline-social.js"></script>
<?php get_footer(); ?>
