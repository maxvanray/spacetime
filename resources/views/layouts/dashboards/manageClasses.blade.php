<h1 class="page-header">Dashboard: Manage Classes</h1>

<ul class="nav nav-tabs">
  	<li class="active"><a data-toggle="tab" href="#home">Classes</a></li>
	<li><a data-toggle="tab" href="#menu1">Create Class</a></li>
	<li><a data-toggle="tab" href="#menu2">Edit Class</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">

		<h2 class="sub-header">Class List</h2>
		  <div class="table-responsive">
			    <table class="table table-striped">
			      <thead>
			        <tr>
			          <th>IDNum</th>
			          <th>Title</th>
			          <th>Description</th>
			          <th>Category</th>
			          <th>Created By</th>
			          <th>Edit</th>
			        </tr>
			      </thead>
			      <tbody>

					@foreach ($fixtures as $fixture)
						<tr>
							<td>{{ $fixture->classid }}</td>
							<td>{{ $fixture->title }}</td>
							<td>{{ $fixture->description }}</td>
							<td>{{ $fixture->category }}</td>
							<td>{{ $fixture->createdby }}</td>
							<td><button class="btn btn-danger btn-sm">Edit</button></td>
						</tr>
					@endforeach

			      </tbody>
			    </table>
		  </div>



	</div>
	<div id="menu1" class="tab-pane fade">

		<h2 class="sub-header">Create Class</h2>
<div class="row">

	<form action="@php echo url()->current(); @endphp" method="POST">


		{{ method_field('POST') }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="col-md-6">
		  <div class="form-group">
	        <label>Class Image</label>
	        <div class="input-group">
	            <span class="input-group-btn">
	                <span class="btn btn-default btn-file">
	                    Browse… <input type="file" id="imgInp">
	                </span>
	            </span>
	            <input type="text" class="form-control" readonly>
	        </div>
	        <img id='img-upload'/>
	    </div>

		  <div class="form-group">
		    <label for="classname">Class Name</label>
		    <input type="text" class="form-control" id="classname" name="classname" placeholder="Class Name">
		  </div>
		  <div class="form-group">
		    <label for="classid">Class ID</label>
		    <input type="text" class="form-control" id="classid" name="classid" placeholder="Class ID">
		  </div>
		  <div class="form-group">
		    <label for="category">Category</label>
		    <input type="text" class="form-control" id="category" name="category" placeholder="Class ID">
		  </div>

		</div>
	  	<div class="col-md-6">

		  <div class="form-group">
		    <label for="classdescription">Class Description</label>
		    <textarea class="form-control" rows="3" id="classdescription" name="classdescription" placeholder="Class Description"></textarea>
		  </div>


	  	</div>
		<div class="col-md-12">
		  <button type="submit" class="btn btn-success">Submit</button>
	  	</div>
	</form>

</div>






		  </div>
		  <div id="menu2" class="tab-pane fade">
		  </div>


<script type="text/javascript">

$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
	});

</script>
