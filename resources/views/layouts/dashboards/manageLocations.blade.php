<h1 class="page-header">Dashboard: Manage Locations</h1>



<ul class="nav nav-tabs">
  	<li class="active"><a data-toggle="tab" href="#home">Locations</a></li>
	<li><a data-toggle="tab" href="#menu1">Create Location</a></li>
	<li><a data-toggle="tab" href="#menu2">Edit Location</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">

		<div class="article-list">
		    <div class="container">

		        <div class="intro">
		            <h3 class="text-center">Locations </h3>
		            <p class="text-center">Please choose a location for this event.</p>
		        </div>
		        <div class="row articles">
				@if (count($locations) >= 1)
					@foreach ($locations as $location)
						<div class="col-md-4 col-sm-6 item">
			                <a href="#"><img src="desk.jpg" class="img-responsive" /></a>
			                <h3 class="name">{{ $location->title }}</h3>
							<p class="address">{{ $location->street }}<br>{{ $location->city }},{{ $location->state }} {{ $location->zip }}</p>
			                <p class="description">{{ $location->description }}</p>
			                <div
			                role="group" class="btn-group">
			                    <button class="btn btn-danger btn-sm" type="button">Edit </button>
			            	</div>
			        	</div>

					@endforeach
				@else
					<h1>No locations are set</h1>
				@endif

				</div>

			</div>
		</div>

	</div><!--TAB1 END -->
	<div id="menu1" class="tab-pane fade">


<?php
/*
<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Contact us</h2>
        <div class="form-group has-success has-feedback">
            <input class="form-control" type="text" name="name" placeholder="Name" /><i class="form-control-feedback glyphicon glyphicon-ok" aria-hidden="true"></i></div>
        <div class="form-group has-error has-feedback">
            <input class="form-control" type="email" name="email" placeholder="Email" /><i class="form-control-feedback glyphicon glyphicon-remove" aria-hidden="true"></i>
            <p class="help-block">Please enter a correct email address.</p>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">send </button>
        </div>
    </form>
</div>
*/
?>





		<h3 class="text-center">Create Location </h3>

		<div class="contact-clean">


			{!! Form::open() !!}

			<div class="form-group">
				{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
				{!! Form::text('title', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('street', 'Street', ['class' => 'control-label']) !!}
				{!! Form::text('street', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('city', 'City', ['class' => 'control-label']) !!}
				{!! Form::text('city', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('state', 'State', ['class' => 'control-label']) !!}
				{!! Form::text('state', null, ['class' => 'form-control']); !!}

			<div class="form-group">
				{!! Form::label('zip', 'Zip', ['class' => 'control-label']) !!}
				{!! Form::text('zip', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('room', 'Room', ['class' => 'control-label']) !!}
				{!! Form::text('room', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('floor', 'Floor', ['class' => 'control-label']) !!}
				{!! Form::text('floor', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
				{!! Form::textarea('description', null, ['class' => 'form-control']); !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Create Location', ['class' => 'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}

		</div>

	</div>
	<div id="menu2" class="tab-pane fade">

		<div class="container">
			<h3 class="text-center">Edit Location </h3>
		</div>

	</div>
