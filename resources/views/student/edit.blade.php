@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
	<br>
	<h3>Edit</h3>
	<br>
	@if(count($errors)>0)
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
	@endif
	<form method="post" action="{{action('StudentController@update',$id)}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="patch">
		<div class="form-group">
			<label for="first_name">First name:</label>
			<input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" placeholder="enter first name">
		</div>
		<div class="form-group">
			<label for="last_name">Last name:</label>
		<input type="text" name="last_name" class="form-control" value="{{$student->last_name}}" placeholder="enter last name"> 
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="" value="Edit">
		</div>
	</form>
</div>
</div>
@endsection