@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>
		Add Book
	</h1>
			<form method="post" action="add" enctype="multipart/form-data">
			@csrf
			  <div class="form-group">
			    <label for="name">Title</label>
			    <input type="text" class="form-control" name="title" placeholder="Enter Book Title">
			  </div>
			  <div class="form-group">
			    <label for="description">Description</label>
			    <input type="text" class="form-control" name="description"  placeholder="Enter Discription">
			  </div>
			  <div class="form-group">
			    <label for="contact">Price</label>
			    <input type="text" class="form-control" name="price"  placeholder="Enter Price">
			  </div>
			  <div class="form-group">
                <label for="file">Add File</label>
                <input id="file" type="file" name="file">
            </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
</div>
@stop