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
    
    <div class="google_ad" style="width: 250px; margin: 0 auto;">
        <script type="text/javascript"><!-- 
        google_ad_client = "ca-pub-7306302306923975";
        /* Sidebar Ad */
        google_ad_slot = "8455640306";
        google_ad_width = 250;
        google_ad_height = 250;
        //-->
        </script>
        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </div>

<!-- add logo for Texas open for business -->
    <div class="texas-open-for-biz-logo" style="margin: 15px auto; width: 250px;">
        <a href="http://www.texaswideopenforbusiness.com/index.php#txGarage" style="text-indent: -9999px; display: block; width: 100%; background-image: url(http://txgarage.com/images/2013/02/texas-ofb-logo.png) no-repeat; background: url(http://txgarage.com/images/2013/02/texas-ofb-logo.png) no-repeat; height: 160px;" target="_blank">
            Texas Wide Open for Business
        </a>
    </div>	
	<?php endif; ?>

</div>