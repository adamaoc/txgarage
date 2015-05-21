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
		<div class="full-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
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
				<div class="post-wrapper">
					<p>
					<?php the_content(); ?>
					</p>
				</div>
			</div>
		<?php endwhile; endif; ?>

		<?php //get_sidebar(); ?>

	</section>

	<script type="text/jsx">
		var heroEl = document.getElementById('post-hero');
		var heroImg = heroEl.dataset.img;
		// console.log(galleryList);
		var imgStyle = { width: '100%'};
		
		var Hero = React.createClass({
			getInitialState: function() {
				return {
					currImg: this.props.mainImg,
					prevImg: this.props.list[19],
					nextImg: this.props.list[1],
					arrowNext: ">",
					arrowPrev: "<"
				}
			},

			moveForward: function() {
				var fullList = this.props.list;
				var currImg = this.state.currImg;
				var nextImg = this.state.nextImg;
				var pos = fullList.indexOf(nextImg) + 1;
				if(pos > (fullList.length -1)) {
					pos = 0;
				}
				var newNext = fullList[pos];

				this.setState({
					currImg: nextImg,
					prevImg: currImg,
					nextImg: newNext
				});
			},
			moveBack: function() {
				var fullList = this.props.list;
				var currImg = this.state.currImg;
				var prevImg = this.state.prevImg;
				var pos = fullList.indexOf(prevImg) - 1;
				if(pos === 0) {
					pos = fullList.length -1;
				}
				var newPrev = fullList[pos];

				this.setState({
					currImg: prevImg,
					prevImg: newPrev,
					nextImg: currImg
				});
			},
			render: function() {
				return (
					<div className="post-hero--list">
						<div className="post-hero--prev">
							<img src={this.state.prevImg} style={imgStyle} />
						</div>
						<div className="post-hero--img">
							<div className="img--prev" onClick={this.moveBack}>
								{this.state.arrowPrev}
							</div>
							<img src={this.state.currImg} style={imgStyle} />
							<div className="img--next" onClick={this.moveForward}>
								{this.state.arrowNext}
							</div>
						</div>
						<div className="post-hero--prev">
							<img src={this.state.nextImg} style={imgStyle} />
						</div>
					</div>
				);
			}
		});

		React.render(<Hero mainImg={heroImg} list={galleryList} />, heroEl);
	</script>

<?php get_footer(); ?>