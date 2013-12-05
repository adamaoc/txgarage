<?php
	include(TEMPLATEPATH . '/_/contact.php'); 
		
		$errors = array();
		
	if (isset($_POST['email'], $_POST['subject'], $_POST['message'])){
		
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
			$errors[] = 'You must enter a valid email';
		}
		if (empty($_POST['subject']) || ($_POST['subject'] === "subject")) {
			$errors[] = 'You must enter a valid subject';
		}
		if (($_POST['auth']) != "yes") {
			$errors[] = 'You must be human to contact us.';
		}
		if (empty($_POST['message']) || ($_POST['message'] === "Your message here...")) {
			$errors[] = 'Please enter a message.';
		}
		if (empty($errors)) {
			contact_email($_POST['email'],  $_POST['subject'], $_POST['message']);
		}
		
	}
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="txgarage" data-template-set="txGarage automotive new and reviews theme" profile="txgarage.com">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="snTnNu_9--HnI9ISHZ7j-Pa8X3LWQEPljfrUnpAVDn0" />
	
	<meta name="ampnetmedia" content="ampnetmedia - Dallas Web Design">
	<meta name="Copyright" content="Copyright txGarage 2013. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="txGarage">
	<meta name="DC.subject" content="News - Reviews - Passion for the Texas automotive consumer.">
	<meta name="DC.creator" content="site designed and developed by ampnetmedia.">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
		<?php
			
				if (empty($errors) === false){
					?>
						<script>
							$(window).load(function() {
  							$('div.errormessage').stop().animate({bottom: 60}, 'slow').fadeIn();
  							
  							$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
  							
  							$('div.close').click(function() {
  								$('div.errormessage').fadeOut();
  							});
							});
						</script>
						<div class="errormessage">
							<div class="close"><span>x</span> close</div>
							<ul>
								<?php
									
								foreach ($errors as $error){
									echo "<li>{$error}</li>";
								}
									
								?>
							</ul>
						</div>
					<?php
				}
			
			?>
	<!-- txGarage is part of the ampnet(media) group -->
	<div id="page-wrap">

		<header id="header">
			<h2><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><?php bloginfo('description'); ?></h2>
			
		</header>
		<nav>
			<?php wp_nav_menu( array('menu' => 'main-nav' )); ?>
			<div class="description"><?php bloginfo('description'); ?></div>
		</nav>
		 
