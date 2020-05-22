<!DOCTYPE html>
<html>
	<head>
		<title>MasakMasak.com</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
			  crossorigin="anonymous">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="{{ asset('css/layout.css') }}" media="all" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/sidebar.css') }}" media="all" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/recipes_menu.css') }}" media="all" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/create_menu.css') !!}" media="all" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/sidebar.css') !!}" media="all" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis(.)com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
            jQuery(document).ready(function() {
				@yield('createMenu');
            });
		</script>
	</head>
	<body>
		@include('sidebar')
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>
