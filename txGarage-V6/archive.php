<?php get_header(); ?>

	<div class="hero-wrap insta-box">
		<?php get_template_part('hero-pages'); ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter insta-box__default"></div>
		</div>
	</div>

<?php if ( have_posts() ) : ?>

	<section class="content-wrapper">
		<div>
			
			<a href="<?php the_permalink(); ?>">
				<h1 class="archive-title <?php get_template_part('cat-tab-color');?>"><?php the_archive_title(); ?></h1>
			</a>

			<?php

				//the_archive_title( '<h1 class="page-title ">', '</h1>' );
				// the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wilks_whitetail' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>
			
		</div>
	</section>
			

<?php endif; ?>


<?php get_footer(); ?>