		<footer id="footer" class="source-org vcard copyright">
			<div class="footer-inner">
				<ul class="recent-posts">
					<h3>Recent Posts</h3>
					<?php
					global $post;
					$args = array( 'numberposts' => 8, 'offset'=> 0  );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
					<li><a href="http://txgarage.com/feature/random-photos-from-txgarage/" title="txGarge car photography and random automotive pictures">Random Automotive Photography by txGarage</a></li>
				</ul>
				
				<div class="footer-contact">
				
				</div>
				
				<div class="footerNav">
					<h3>Footer Navigation</h3>
					<?php wp_nav_menu( array('menu' => 'main-nav' )); ?>
					<?php wp_nav_menu( array('menu' => 'secondary-nav' )); ?>
				</div>
				<div class="footerSocial">
					<h3>txGarage social sites</h3>
					<?php wp_nav_menu( array('menu' => 'social-nav' )); ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="copy">&copy <?php echo date("Y"); echo " "; bloginfo('name'); ?> - established 2007 - <?php bloginfo('description'); ?> - site design and multimedia by <a href="http://ampnetmedia.com" target="_blank">ampnet(media)</a> - all rights reserved</div>
		</footer>

	</div>

	<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<?php if(is_single()) { ?>
<script>
(function() {
// special quote
	var co = $('article').find('span.quote').each(function() {
		var $this = $(this);

		$('<blockquote></blockquote>', {
			class: 'quote',
			text: $this.text()
		}).prependTo( $this.closest('p') );
		
	});
// remove width and height from img	
	$('img.alignnone').each(function(){ 
        $(this).removeAttr('width')
        $(this).removeAttr('height');
    });
    
// remove all height's from imgs 
	$('.inner-content img').each(function(){
			$(this).removeAttr('height');
	});    
	
// every 3rd image add class
 	if($(".entry-content").length){
 		$("img.alignnone").each(function(i){
 			var remainder = (i + 1) % 3;	 
 			if(remainder === 0){
 				$(this).parent().after('<div class="clear"></div>');
 			}
 		});
 	}
	
	$('div.wp-caption').eq(0).addClass('first');

})();
</script>
<?php } ?>

<!-- analytics CODE -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-9674179-1");
		pageTracker._trackPageview();
		} catch(err) {}
		var pageTracker = _gat._getTracker('UA-XXXXX-X');
		pageTracker._trackPageview();
	</script>
	
</body>

</html>
