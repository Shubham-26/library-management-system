<!DOCTYPE html>
<html>
<head>
	<title>Library</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<header>
	 
	 	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <a class="navbar-brand" href="/">Library System</a>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item ">
			        <a class="nav-link" href="/">Home </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="list">List</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="add">Add</a>
			      </li>
			      @if(Session::get('user'))
			      <li class="nav-item">
			        <a class="nav-link" href="">Welcome {{Session::get('user')}}</a>
			      </li>
			      @else
			      <li class="nav-item">
			        <a class="nav-link" href="login">Login</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="register">Register</a>
			      </li>
			      @endif
			    </ul>
			    @if(Session::get('user'))
			    <ul class="navbar-nav  mt-2 mt-lg-0">
			       <li class="nav-item">
			        <a class="nav-link" href="logout">Logout</a>
			      </li>
			      </ul>
			    
			     @endif
			  </div>
		</nav>

</header>
<div>
	
	@yield('content')
</div>

<footer>
	
</footer>
</body>
</html>