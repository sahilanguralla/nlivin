window.onload = function() {
	$(".fb-share-button").click(function(event) {
		var desc = $(this).data('desc');	
		var caption = $(this).data('author');	
		var picture = $(this).data('picture');	
		var name = 'A Quote by ' + caption;	
		FB.ui({
		  method: 'feed',
		  caption: caption,
		  description: desc,
		  picture: picture 
		}, function(response){});
	})
}