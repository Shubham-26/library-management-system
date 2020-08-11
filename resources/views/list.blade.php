@extends('layout')

@section('content')

<div>
	<h1>
		<center>List of Book's</center>


	</h1>
	
@if(Session::get('status'))

<div class="alert alert-success  alert-dismissible fade show col-sm-8" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endif
	<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Price</th>
      <th scope="col">Uploaded by</th>
      <th scope="col">Display</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->user}}</td>
      <td><a href="{{ asset('books/' . $item->file) }}" target="_black"> view File</a></td>

      <td><a href="delete/{{$item->id}}"><i class="fas fa-trash"></i></a>
      		<a href="edit/{{$item->id}}"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
	@endforeach
  </tbody>
</table>



</div>
@stop