window.onload = function() {
	$(".fb-share-button").click(function(event) {
		var target = $($(this).data("target"));
		var desc = target.data('desc');	
		var caption = target.data('author');	
		var picture = target.data('picture');	
		var link = target.data('link');	
		var name = 'A Quote by ' + caption;	
		FB.ui({
		  method: 'feed',
		  name: name,
		  link: link,
		  description: desc,
		  picture: picture 
		}, function(response){});
	});
	$(".whatsapp-share-button").click(function(event) {
		var target = $($(this).data("target"));
		var desc = target.data('desc');	
		var caption = target.data('author');	
		var picture = target.data('picture');	
		var link = target.data('link');	
		$(this).attr("href", "whatsapp://send?text=" + desc + " - " + caption + " - More at " + link);	
	})
}