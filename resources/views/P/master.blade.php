<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perpus/perpus.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">E-Library</a>
	  </div>

	  <div class="collapse navbar-collapse" id="menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">About</a></li>
	      <li><a href="#">Contact</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> List</a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Action</a></li>
	          <li><a href="#">Another action</a></li>
	          <li><a href="#">Something else here</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Separated link</a></li>
	          <li class="divider"></li>
	          <li><a href="#">One more separated link</a></li>
	        </ul>
	      </li>
	    </ul>
	    <div class="col-sm-3 col-md-3">
	        <form class="navbar-form" role="search">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search" name="q">
	            <div class="input-group-btn">
	                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	            </div>
	        </div>
	        </form>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">Web</a></li>
	      <li><a href="#">Forum</a></li>
	      <li>
	      	<a href="#"><i class="glyphicon glyphicon-logout"></i>Login</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	@yield('isi')

	<div class="ui inverted vertical footer segment">
	    <div class="ui center aligned container">
		    <div class="ui stackable inverted divided grid">
		        <div class="three wide column">
		        	<h4 class="ui inverted header">Group 1</h4>
		          	<div class="ui inverted link list">
		            	<a href="#" class="item">Link One</a>
		            	<a href="#" class="item">Link Two</a>
		            	<a href="#" class="item">Link Three</a>
		            	<a href="#" class="item">Link Four</a>
		          	</div>
		        </div>
		        <div class="three wide column">
		          	<h4 class="ui inverted header">Group 2</h4>
		          	<div class="ui inverted link list">
		            	<a href="#" class="item">Link One</a>
		            	<a href="#" class="item">Link Two</a>
		            	<a href="#" class="item">Link Three</a>
		            	<a href="#" class="item">Link Four</a>
		          	</div>
		        </div>
		        <div class="three wide column">
		          	<h4 class="ui inverted header">Group 3</h4>
		          	<div class="ui inverted link list">
		            	<a href="#" class="item">Link One</a>
		            	<a href="#" class="item">Link Two</a>
		            	<a href="#" class="item">Link Three</a>
		            	<a href="#" class="item">Link Four</a>
		          	</div>
		        </div>
		        <div class="seven wide column">
		          	<h4 class="ui inverted header">Footer Header</h4>
		          	<p>Extra space for a call to action inside the footer that could help re-engage users.</p>
		        </div>
		    </div>
		    <div class="ui inverted section divider"></div>
		    <img src="" class="ui centered mini image">
		    <div class="ui horizontal inverted small divided link list">
		        <a class="item" href="#">Site Map</a>
		        <a class="item" href="#">Contact Us</a>
		        <a class="item" href="#">Terms and Conditions</a>
		        <a class="item" href="#">Privacy Policy</a>
		    </div>
	    </div>
  	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/perpus/perpus.js') }}"></script>
</body>
</html>