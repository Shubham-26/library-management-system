@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>
		Login page data
	</h1>

			@if(Session::get('status'))

		<div class="alert alert-success  alert-dismissible fade show col-sm-8" role="alert">
		  {{Session::get('status')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>


		@endif

	<form method="post" action="login">
			@csrf
			  <div class="form-group">
			    <label for="username">User name</label>
			    <input type="text" class="form-control" name="username" placeholder="username">
			  </div>
			  
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="text" class="form-control" name="password"  placeholder="password">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Log In</button>
			</form>
</div>
@stop