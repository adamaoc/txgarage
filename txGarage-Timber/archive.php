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
			

			<a class="archive-title" href="<?php the_permalink(); ?>">
				<h1 class="<?php get_template_part('cat-tab-color');?>"><?php the_archive_title(); ?></h1>
			</a>
			<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="archive-wrapper">
					<a class="link-title" href="<?php the_permalink(); ?>">
						<h2 class="<?php get_template_part('cat-tab-color');?>">
							<?php the_title(); ?>
						</h2>
					</a>
					<div class="meta">
			        <svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg>
			        by <?php the_author(); ?></div>
					<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail();
					} 
					?>

					<?php 
						// unhide to show the word count 
						$charactercount = 100;
						echo wp_trim_words( get_the_content(), $charactercount, ' ... Read More >>	' ); 
					?>
				</div>


			<?php endwhile; ?>
			<?php else : ?>
		</div>
	</section>
			

<?php endif; ?>


<?php get_footer(); ?>