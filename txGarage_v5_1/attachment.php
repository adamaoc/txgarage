<?php get_header(); ?>

<div id="inner-bottom-wrap">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="inner-main">
		<div class="inner-content">	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<div class="entry-content">
				
						<div style="margin: 0px auto; text-align: center;">
							<img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
						</div>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					<h2 style="text-align: center"><?php the_title(); ?></h2>	
					<p class="tags"><?php the_tags( 'Tags: ', ', ', ''); ?></p>
				</div>
			
			</article>
			
			<div class="divider"></div>
			<!-- Place this tag where you want the +1 button to render. -->
			<div style="width: 100%; text-align: center;">
				<div class="g-plusone"></div>
				
				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/platform.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
<div class="ad photo_gallery_ad google-ad mobile-show" style="width: 320px; margin: 0px auto;">
<script type="text/javascript">
<!--
google_ad_client = "ca-pub-7306302306923975";
/* photo_gallery */
google_ad_slot = "2452805908";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
	<?php endwhile; endif; ?>
	</div><!-- off main content -->
	
	<div class="mobile-hide" style="width: 728px; margin: 0 auto; padding: 10px 0;">
	    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Photo-page-leaderboard -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7306302306923975"
             data-ad-slot="8104611503"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
	</div>
</div><!-- off inner main wrap -->	

<?php // get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off inner bottom wrap  -->

<?php get_footer(); ?>

