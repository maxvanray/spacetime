<h1 class="page-header">Dashboard: Manage Staff</h1>



<ul class="nav nav-tabs">
  	<li class="active"><a data-toggle="tab" href="#home">Staff</a></li>
	<li><a data-toggle="tab" href="#menu1">Create Staff member</a></li>
	<li><a data-toggle="tab" href="#menu2">Edit Staff Member</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">

		<div class="article-list">
		    <div class="container">

				<h3 class="text-center">Staff</h3>

				<div class="row articles">

					<div class="row staff">


					    <div class="col-lg-3 col-sm-6 item"><img src="desk.jpg" class="img-responsive" />
					        <h3 class="name">John Does</h3>
					        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
					    </div>
					    <div class="col-lg-3 col-sm-6 item"><img src="building.jpg" class="img-responsive" />
					        <h3 class="name">Mary Ann</h3>
					        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
					    </div>
					    <div class="col-lg-3 col-sm-6 item"><img src="loft.jpg" class="img-responsive" />
					        <h3 class="name">Steven Jones</h3>
					        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
					    </div>
					    <div class="col-lg-3 col-sm-6 item"><img src="minibus.jpeg" class="img-responsive" />
					        <h3 class="name">Elliot Wang</h3>
					        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
					    </div>
					</div>
				</div>

			</div>
		</div>

	</div><!--TAB1 END -->
	<div id="menu1" class="tab-pane fade">


			<h3 class="text-center">Create Staff Member</h3>

			<div class="contact-clean">


				{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
					{!! Form::text('name', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
					{!! Form::text('email', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
					{!! Form::text('title', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
					{!! Form::text('phone', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('phone2', 'Phone2', ['class' => 'control-label']) !!}
					{!! Form::text('phone2', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
					{!! Form::text('address', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('city', 'City', ['class' => 'control-label']) !!}
					{!! Form::text('city', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('state', 'State', ['class' => 'control-label']) !!}
					{!! Form::text('state', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('zip', 'Zip', ['class' => 'control-label']) !!}
					{!! Form::text('zip', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('emergencycontact', 'Emergency Contact', ['class' => 'control-label']) !!}
					{!! Form::text('emergencycontact', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('emergencycontactnumber', 'Emergency Contact Number', ['class' => 'control-label']) !!}
					{!! Form::text('emergencycontactnumber', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
					{!! Form::textarea('description', null, ['class' => 'form-control']); !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Create', ['class' => 'btn btn-success']) !!}
				</div>
				{!! Form::close() !!}

			</div>
	</div>
	<div id="menu2" class="tab-pane fade">

		<div class="container">
			<h3 class="text-center">Edit Staff Member</h3>
		</div>

	</div>
</div>
