<?php /*
Template Name: sposors_page
*/ 
?>
	
<?php get_header(); ?>
<script type="text/javascript" src="https://cdn.firebase.com/js/client/2.0.2/firebase.js"></script>
<?php /* If this page is magazine */ if (is_page('magazine')) { ?>
	<?php include("_/page_headers/magazine.php"); ?>
	<?php } ?>

<div id="inner-bottom-wrap">
	<div id="inner-main">
		<div class="inner-content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry sponsor-ads">

				<?php the_content(); ?>
				
				<ul class="sponsor-list">
					<?php 
						$allSponsors = get_post_meta($post->ID, 'sponsor', false);
						shuffle($allSponsors);
						foreach ($allSponsors as $sponsor) {
							echo $sponsor;
						}
						
					?>
					<div class="clear"></div>
				</ul>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>

		<?php endwhile; endif; ?>

	</div><!-- off main content -->
</div><!-- off inner main wrap -->	
	
<script>
	var titanTag = document.getElementById('nissanTitan');
	var api = new Firebase("https://amp-stats.firebaseio.com/txgarage/sponsors");

	var date = function() {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yyyy = today.getFullYear();
		if(dd<10) {
			dd='0'+dd
		} 
		if(mm<10) {
			mm='0'+mm
		} 
		today = mm+'/'+dd+'/'+yyyy;
		return today;
	}

	titanTag.addEventListener("click", doOmniture);

	function doOmniture(event) {
		console.log(event.target.parentNode.parentNode.id);
		var	adClicked = event.target.parentNode.parentNode.id;
		api.push({date: date(), link: adClicked, page: 'sponsor', timeStamp: Firebase.ServerValue.TIMESTAMP});
	}
</script>
<?php get_sidebar(); ?>

	<div class="clear"></div>
</div><!-- off inner bottom wrap  -->

<?php get_footer(); ?>
