@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>
		Edit Book Details
	</h1>
			<form method="post" action="/edit">
			@csrf
			  <div class="form-group">
			  
			  <input type="hidden" name="id" value="{{$data->id}}" placeholder="Name">

			    <label for="Title">Title</label>
			    <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title">
			  </div>
			  <div class="form-group">
			    <label for="address">Description</label>
			    <input type="text" class="form-control" name="description"  value="{{$data->description}}" placeholder="description">
			  </div>
			  <div class="form-group">
			    <label for="contact">Price</label>
			    <input type="text" class="form-control" name="price" value="{{$data->price}}" placeholder="Price">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
</div>
@stop