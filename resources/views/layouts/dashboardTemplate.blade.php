
@section('title', ': Dashboard')

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	    <title>{{ env('APP_NAME', 'SpaceTime') }} @yield('title')</title>

	    <!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('storage/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('storage/css/font-awesome.min.css')}}">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('storage/css/smartadmin-production-plugins.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('storage/css/smartadmin-production.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('storage/css/smartadmin-skins.min.css')}}">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="storage/js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="storage/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>


	    <!-- Scripts -->
	    <script>
	        window.Laravel = {!! json_encode([
	            'csrfToken' => csrf_token(),
	        ]) !!};

	    </script>

	    @section('headspace')

	</head>


 <body class="{{ $section }} dashboard">

    @include('layouts.dashboard-navigation')



	<div id="main" role="main">
		<div id="content">

	@section('content')
	@show

		</div>
	</div>



@include('layouts.dashboard-footer')

@include('layouts.dashboard-scripts')

@section('legroom')
@show

  </body>
</html>
