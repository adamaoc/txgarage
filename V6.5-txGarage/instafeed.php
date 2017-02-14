<?php /*
Template Name: instafeed
*/
?>
<?php wp_head(); ?>

<div class="insta-box" style="width: 1500px;">
  <div id="instafeed"></div>
</div>

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
  		extras = "<div style='display: inline;'>" + $('#instafeed').html() + "</div>";
  		$('#instafeed').append(extras);
  	}
  });

  feed.run();
</script>
