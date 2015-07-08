<?php get_header(); ?>
<?php
  // Timber Setup
  $context = array();
	$context = Timber::get_context();
  $context['posts'] = Timber::get_posts();

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

	<div class="hero-wrap hero-wrap--inner insta-box">
		<?php// get_template_part('hero-pages'); ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter insta-box__default"></div>
		</div>
		<h1><?= $context['title']; ?></h1>
	</div>

	<section class="post-list--expanded limit-wrapper">
	  <?php Timber::render('archive-list.twig', $context); ?>
	</section>

<?php get_footer(); ?>
