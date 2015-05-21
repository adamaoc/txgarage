<?php get_header(); ?>
<script src="https://fb.me/react-0.13.3.min.js"></script>
<script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
<?php // move scripts out of this page... for testing only ?>

	<div class="hero-wrap hero-wrap-<?php get_template_part('cat-tab-color');?> insta-box">
		<?php get_template_part('hero-pages'); ?>
		<div class="insta-box__wrapper">
			<div id="instafeed"></div>
			<div class="insta-box__filter <?php get_template_part('category-color');?>"></div>
		</div>
	</div>

	<section class="content-wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="post-wrapper">
				
				<h1 class="<?php get_template_part('cat-tab-color');?>"><?php the_title(); ?></h1>
				<div class="meta">
		        <svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg>
		        by <?php the_author(); ?>
	    	</div>
				
				<?php if ( has_post_thumbnail() ) { 
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );  
		    ?>
					<div id="post-hero" class="post-hero" data-img="<?=$large_image_url[0]?>">
						<img src="<?=$large_image_url[0]?>" width="100%" />
					</div>
				<?php } ?>

				<p>
				<?php the_content(); ?>
				</p>
				
			</div>
		<?php endwhile; endif; ?>

		<?php //get_sidebar(); ?>

	</section>

	<script type="text/jsx">
		var heroEl = document.getElementById('post-hero');
		var heroImg = heroEl.dataset.img;
		console.log(galleryList);

		var Hero = React.createClass({
			render: function() {
				return (
					<div className="post-hero--list">
						<div className="post-hero--img">
							<img src={this.props.mainImg} style="max-width: 100%;" />
						</div>
					</div>
				);
			}
		});

		React.render(<Hero mainImg={heroImg} list={galleryList} />, document.getElementById('post-hero'));
	</script>

<?php get_footer(); ?>