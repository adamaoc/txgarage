	</main>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<nav class="footer--nav">
            		<?php wp_nav_menu( array('menu' => 'footer-menu')); ?>
				</nav>
				<div class="footer--tawa">
					<a href="http://texasautowriters.org" target="_blank">
						<span class="tawa-txt">Proud Member:</span>
						<img src="http://txgarage.com/images/2014/10/TAWA-State-Logo.png" alt="Texas Auto Writers Association" />
					</a>
				</div>
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - established 2007 - <?php bloginfo('description'); ?> - site designed and developed by <a href="http://ampnetmedia.com">ampnet(media)</a> &amp; <a href="http://jkwcreated.com">JKW Created</a> - all rights reserved
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/src/js/instafeed.js"></script>

		<script>
			var extras = "";
			var feed = new Instafeed({
				get: "tagged",
				tagName: "txgarage",
				limit: 32,
				resolution: "thumbnail",
				clientId: "c2e26464fcc944c4af803e1b64650871",
				template: '<img src="{{image}}" class="insta-img" alt="{{caption}}" />',
				sortBy: "most-recent",
				after: function() {
					extras = "<div class='insta-extras'>" + $('#instafeed').html() + "</div>"; 
					$('#instafeed').append(extras);
				}
			});

			feed.run();
		</script>
		
		<!-- refactor out extra js files -->
		<script src="<?php bloginfo('template_directory'); ?>/src/js/navigation.js"></script>
		<!-- analytics -->
		<script>
		// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		// ga('send', 'pageview');
		</script>

	</body>
</html>
