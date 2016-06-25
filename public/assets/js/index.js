window.onload = function() {
	$(".fb-share-button").click(function(event) {
		var desc = $(this).data('desc');	
		var caption = $(this).data('author');	
		var picture = $(this).data('picture');	
		var link = $(this).data('link');	
		var name = 'A Quote by ' + caption;	
		FB.ui({
		  method: 'feed',
		  name: name,
		  link: link,
		  description: desc,
		  picture: picture 
		}, function(response){});
	})
}