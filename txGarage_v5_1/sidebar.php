<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
 
     <div class="sidebar-about">
    	<h2 class="about">About txGarage</h2>
    	<blockquote>txGarage is a publication for the Texas automotive consumer. We offer News, Reviews, and Passion for Texans by Texans. We know Texas and we know Texans and we do real world tests all over the Texas landscape.</blockquote>
    </div>
    <div class="sidebar-search">
    	<?php get_search_form(); ?>
    </div>
    
    <?php // include("_/sidebar/social-sidebar.php"); ?>

    <div class="sidebar-sponsors">
    	<h2>Sponsors</h2>
    	<?php include("_/sidebar/sponsors.php"); ?>
    </div>
		<div class="clear"></div>
		
    <div class="sidebar-gplus" style="text-align: center; padding-top: 10px;">
    	<!-- Place this tag where you want the +1 button to render. -->
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
		<div class="clear"></div>
    
    <div class="sidebar-tag-search">
    	<h2>Search by tag</h2>
    		<?php wp_tag_cloud('smallest=8&largest=18&number=25'); ?>
    </div>	
    <div class="sidebar-featured">
    	<h2>Featured Posts</h2>
    	<ul class="featured-reviews">
			<?php
			global $post;
			$args = array( 'numberposts' => 5, 'offset'=> 0, 'category' => 11 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>	
	
	<div class="sidebar-preferred">
		<?php wp_nav_menu( array('menu' => 'Preferred_links' )); ?>
	</div>
	<div class="sidebar-logos">
		<div class="tawa-logo">
			<p>txGarage is a proud member of the <br />
				<a href="http://texasautowriters.org/#txgarage" title="Texas Auto Writers Association" target="_blank">
					Texas Auto Writers Association
				</a>
			</p>
		</div>
	</div>	
<div class="google_ad" style="width: 300px; margin: 0 auto; padding-bottom: 10px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- New_Sidebar-300 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-7306302306923975"
     data-ad-slot="2616481100"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<!-- add logo for Texas open for business -->
<div class="texas-open-for-biz-logo">
<a href="https://texaswideopenforbusiness.com/#txGarage" target="_blank">
Texas Wide Open for Business</a>
</div>	
	<?php endif; ?>

</div>
