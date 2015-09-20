<?php /*
Template Name: categories
*/
?>
<?php get_header(); ?>
<?php
  // Timber Setup
  $context = array();
	$context = Timber::get_context();
  $context['posts'] = Timber::get_posts();
  $context['pagination'] = Timber::get_pagination();

  // echo "<pre>";
  // print_r($context);
  // echo "</pre>";

	$context['title'] = 'Archive';
	if (is_day()){
		$context['title'] = 'Archive: '.get_the_date( 'D M Y' );
	} else if (is_month()){
		$context['title'] = 'Archive: '.get_the_date( 'M Y' );
	} else if (is_year()){
		$context['title'] = 'Archive: '.get_the_date( 'Y' );
	} else if (is_tag()){
		$context['title'] = single_tag_title('', false);
	} else if (is_category()){
		$context['title'] = single_cat_title('', false);
		// array_unshift($templates, 'archive-'.get_query_var('cat').'.twig');
	} else if (is_post_type_archive()){
		$context['title'] = post_type_archive_title('', false);
		// array_unshift($templates, 'archive-'.get_post_type().'.twig');
	}
?>

  <?php Timber::render('archive-list.twig', $context); ?>

  <?php Timber::render('components/prefered-box.twig', $context); ?>

  <aside class="sidebar sidebar--homepage">
    <?php dynamic_sidebar('homepage'); ?>
  </aside>

  <aside class="sidebar sidebar--ads">
    <?php dynamic_sidebar('ads'); ?>
  </aside>

<?php get_footer(); ?>
