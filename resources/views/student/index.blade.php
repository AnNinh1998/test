@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<br>
		<h3 align="center">Student Data</h3>
		<br>
		@if($message=Session::get('succesfully'))
		<div class="alert alert-succes">
			<p>{{$message}}</p>
		</div>
		@endif
		<div align="right">
			<a href="{{route('student.create')}}" class="btn btn-success">Add</a>
			<br>
			<br>
		</div>
		<table class="table table-bordered">
			<tr align="center">
				<th>First name</th>
				<th>Last name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($students as $row)
				<tr align="center">
					<td>{{$row['first_name']}}</td>
					<td>{{$row['last_name']}}</td>
					<td><a href="{{action('StudentController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
					<td>
						<form method="post" class="delete_form" action="{{action('StudentController@destroy',$row['id'])}}">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="delete">
							<button type="button" class="btn btn-danger" name="archive" onclick="archiveFunction()">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>
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
  confirmButtonText: "Yes, archive it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}
</script>
@endsection