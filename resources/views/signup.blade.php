<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">SidibeElearning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>
  <div class="container mt-4">
  	<h2 class="text-center">Je m'inscris aux cours</h2>
  	@if(Session::has('message'))
  	  <div class="btn btn-success">
  	  	  {{ Session::get('message')}}
  	  </div>
  	@endif
    <form action="{{ route('signup') }}" method="POST">
    	@csrf
     <div class="row">
     <div class="form-group col-md-6">
	    <label for="exampleInputEmail1">Noms & Prénoms</label>
	    <input type="text" name="fullname" class="form-control"  aria-describedby="emailHelp">
	    <small id="emailHelp" class="form-text text-muted"></small>
	  </div>
	  <div class="form-group col-md-6">
	    <label for="exampleInputEmail1">Votre email</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	    <small id="emailHelp" class="form-text text-muted"></small>
	  </div>
     </div>
	 
	  <button type="submit" style="display: block; width: 100%;" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>