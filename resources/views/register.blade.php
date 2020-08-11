@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>
		User Register page data
	</h1>
	<form method="post" action="/register" enctype="multipart/form-data" >
			@csrf
			  <div class="form-group">
			    <label for="username">User name</label>
			    <input type="text" class="form-control" name="username" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" name="email"  placeholder="email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="text" class="form-control" name="password"  placeholder="password">
			  </div>
			  <div class="form-group">
			    <label for="cnf_password">Confirm Password</label>
			    <input type="text" class="form-control" name="cnf_password"  placeholder="confirm password">
			  </div>
			  <div class="form-group">
                <label for="image">Add Image</label>
                <input id="image" type="file" name="image">
            </div>
			  <button type="submit" class="btn btn-primary">Sign In</button>
			</form>
</div>
@stop