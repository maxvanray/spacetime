@section('title', ': Calendar')

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

	@include('layouts.header')

	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

<body class="{{ $section }}">
	@include('layouts.navigation')

	<div class="container theme-showcase" role="main">
		<h1>Class Schedule</h1>
		<div class="row">
			<div class="col-md-12">
			    {!! $calendar->calendar() !!}
			    {!! $calendar->script() !!}
		    </div>
	    </div>
    </div>
</body>
</html>
