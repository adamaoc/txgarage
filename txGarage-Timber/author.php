<?php get_header(); ?>

<?php
global $wp_query;

$data = Timber::get_context();
$data['posts'] = Timber::get_posts();
$data['pagination'] = Timber::get_pagination();
if (isset($wp_query->query_vars['author'])){
	$author = new TimberUser($wp_query->query_vars['author']);
	$data['theauthor'] = $author;
	$data['title'] = 'Author Archives: ' . $author->name();
}
Timber::render(array('author.twig', 'archive-list.twig'), $data);
?>


<?php get_footer(); ?>
