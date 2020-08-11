@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>
		Edit Profile
	</h1>
			<form method="post" action="/profile">
			@csrf
			  <div class="form-group">
			  
			  <input type="hidden" name="id" value="{{$data->id}}" placeholder="Name">

			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name">
			  </div>
			  <div class="form-group">
			    <label for="Email">Email</label>
			    <input type="text" class="form-control" name="email"  value="{{$data->email}}"placeholder="email">
			  </div>
			  <div class="form-group">
			    <label for="Password">Password</label>
			    <input type="text" class="form-control" name="password" value="{{$data->password}}" placeholder="password">
			  </div>
			  <div class="form-group">
			    <label for="Photo">Photo</label>
			    <img src="{{asset('profile/'.$num->image) }}" width="100%"   class="img-circle image" alt="Image" style="border-radius: 5px"; />
			  </div>
			  <button type="submit" class="btn btn-primary">Update</button>
			</form>
</div>
@stop