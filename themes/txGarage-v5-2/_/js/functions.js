// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

// 	// special quote
// 	var co = $('article').find('span.quote').each(function() {
// 		var $this = $(this);

// 		$('<blockquote></blockquote>', {
// 			class: 'quote',
// 			text: $this.text()
// 		}).prependTo( $this.closest('p') );
		
// 	});
// // remove width and height from img	
// 	$('img.alignnone').each(function(){ 
//         $(this).removeAttr('width')
//         $(this).removeAttr('height');
//     });
    
// // remove all height's from imgs 
// 	$('.inner-content img').each(function(){
// 			$(this).removeAttr('height');
// 	});    
	
// // every 3rd image add class
//  	if($(".entry-content").length){
//  		$("img.alignnone").each(function(i){
//  			var remainder = (i + 1) % 3;	 
//  			if(remainder === 0){
//  				$(this).parent().after('<div class="clear"></div>');
//  			}
//  		});
//  	}
	
// 	$('div.wp-caption').eq(0).addClass('first');

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});


// old discontinued stuff /// 
// sociable fix 
	// $('.sociable').first().addClass('socialble1');

// tweetify function
	// $.fn.tweetify = function() {
	// 	this.each(function() {
	// 		$(this).html(
	// 			$(this).html()
	// 				.replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1" target="_blank">$1</a>')
	// 				.replace(/(^|\s)#(\w+)/g,'$1<a href="http://search.twitter.com/search?q=%23$2">#$2</a>')
	// 				.replace(/(^|\s)@(\w+)/g,'$1<a href="http://twitter.com/$2">@$2</a>')
	// 		);
	// 	});
		// return $(this);
	//} // end tweetify

	// get twitter feed
//	$.getJSON("http://twitter.com/statuses/user_timeline/txgarage.json?callback=?", function(data) {
//	     $("#twitter").html(data[0].text);
//	     $("#twitter").tweetify();
//	});
	// off get twitter feed

*/