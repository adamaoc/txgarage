	</main>
		<!-- footer -->
		<footer class="footer" role="contentinfo">
			<div class="footer__nav-wrap">
				<nav class="footer--nav">
            		<?php wp_nav_menu( array('menu' => 'footer-menu')); ?>
				</nav>

				<div class="footer-col-3">
					<div class="social-footer">
						<?php dynamic_sidebar('social'); ?>
					</div>
					<div class="footer--tawa">
						<a href="http://texasautowriters.org#txgarage" target="_blank">
							<span class="tawa-txt">Proud Member:</span>
							<img src="http://txgarage.com/images/2014/10/TAWA-State-Logo.png" data-ad="tawaFooter" class="ad-item__link" alt="Texas Auto Writers Association" />
						</a>
					</div>
				</div>
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
		<script src="<?php bloginfo('template_directory'); ?>/src/js/fitvids.js"></script>
		<script>
		  $(document).ready(function(){
		    // Target your .container, .wrapper, .post, etc.
		    $(".post-wrapper").fitVids();
		  });
		</script>
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
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-9674179-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
