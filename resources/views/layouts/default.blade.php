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
	<link rel="icon" type="image/png" href="{{ URL::to('assets/images/logo.png') }}" />
	<link rel=”author” href="https://plus.google.com/113017778829293740735">
	<title>
		@yield('title') | Get a good taste in life with some mesmerizing inspiration quotes by some famous people | Nlivin
	</title>
	<link rel="stylesheet" href="{{ URL::to('bower_components/semantic/dist/semantic.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('bower_components/acssist/dist/acssist.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets/css/index.css') }}">
	@yield('head-styles')
	@yield('head-scripts')
</head>
<body>
	@include('_partials.header')
	<div class="ui container">
		<div class="ui row">
			<div class="column">
				@yield('content')
			</div>
		</div>
	</div>
	@include('_partials.footer')
	<script type="text/javascript" src="{{ URL::to('bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('bower_components/semantic/dist/semantic.min.js') }}"></script>
	@yield('body-scripts')
</body>
</html>
