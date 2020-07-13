@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<br>
		<h3 align="center">Add data</h3>
		<br>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(\Session::has('succesfully'))
		<div class="alert alert-success">
			<p>{{\Session::get('succesfully')}}</p>
		</div>
		@endif

		<form method="POST" action="{{url('student')}}">
			{{csrf_field()}}
			<div class="form-group">
				<label for="first_name">First name:</label>
				<input type="text" name="first_name" class="form-control" placeholder="Enter first name">
			</div>
			<div class="form-group">
				<label for="last_name">Last name:</label>
				<input type="text" name="last_name" class="form-control" placeholder="Enter last name">
			</div>
			<input type="button" class="btn btn-primary" name="" name="archive" onclick="archiveFunction()" value="Register">
		</form>
	</div>
</div>
<script>
    function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Data Added!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Thank you for your working :)", "error");
    window.location.href="./";
  }
});
}
</script>
@endsection
