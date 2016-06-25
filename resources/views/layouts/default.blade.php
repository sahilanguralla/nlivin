<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta property="og:site_name" content="Nlivin"/>
	<meta property="og:title" content="Inspiration to live an extraordinary life"/>
	<meta property="og:description" content="Live an inspired life with daily quotes from famous personalities."/>
	<meta property="og:url" content="http://nliv.in/">
	<meta property="og:image" content="{{ URL::to('assets/images/logo.png') }}">
	<meta property="og:type" content="blog"/>
	<meta property="fb:appid" content="1169963956388351"/>
	<link rel="icon" type="image/png" href="{{ URL::to('assets/images/logo.png') }}" />
	<link rel=”author” href="https://plus.google.com/113017778829293740735">
	<title>
		@yield('title') | Get a good taste in life with some mesmerizing inspiration quotes by some famous people | Nlivin
	</title>
	<link rel="stylesheet" href="{{ URL::to('bower_components/semantic/dist/semantic.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('bower_components/acssist/dist/acssist.min.css') }}">
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '1169963956388351',
				xfbml      : true,
				version    : 'v2.6'
			});
		};

		(function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		 }(document, 'script', 'facebook-jssdk'));
	</script>
	<script type="text/javascript" src="{{ URL::to('assets/js/index.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::to('assets/css/index.css') }}">
	@yield('head-styles')
	@yield('head-scripts')
</head>
<body class="pushable">
	<div class="pusher">
		@include('_partials.header')
		<div class="ui container">
			<div class="column">
				@yield('content')
			</div>
		</div>
		@include('_partials.footer')
		<script type="text/javascript" src="{{ URL::to('bower_components/jquery/dist/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('bower_components/semantic/dist/semantic.min.js') }}"></script>
		@yield('body-scripts')
	</div>
</body>
</html>
