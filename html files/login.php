<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meditation Site</title>
  <script type="text/javascript" src="..\JS files\login.js"></script>
	<link rel="stylesheet" type="text/css" href="..\CSS files\login.css"></link>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="..\CSS files\navbar.css">
	<script type="text/javascript">
		$(document).ready(
				function(){
					$("#login").mouseover(function()
					{
	  					$("#login").css("background-color", "#FFFFFF");
	  					$("#login").css("color", "#000000");
					});
					$("#login").mouseout(function()
					{
	  					$("#login").css("background-color", "#2D4059");
	  					$("#login").css("color", "#FFB400");
					});
				}
				);
	</script>
	<style type="text/css">
		.nav-link
		{
			color: #000000;
		}
		.link
		{
			color:#000000;
			text-decoration: none;
		}
		.nav-link:hover
		{
			color: #2D4059;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color: #FFB400; position: static;width: 100%;" >
  <a class="navbar-brand" href="#" style="color: #2D4059;"><h1 id="tranquility" >Tranquility</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Documentation</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Excercises
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="deep_breathing.html">Deep Breathing Exercises</a>
              <a class="dropdown-item" href="relaxation.html">Relaxation Exercises</a>
              <a class="dropdown-item" href="visualisation_gi.html">Guided Imagery and Visualization</a>
              <a class="dropdown-item" href="fa.html">Focused Attention Meditation</a>
              <a class="dropdown-item" href="lovingkindness.html">Loving-kindness Meditation</a>
              <a class="dropdown-item" href="progressive_relaxation.html">Progressive Relaxation Meditation</a>
              <a class="dropdown-item" href="body_scan.html">Body Scan Meditation</a>
              <a class="dropdown-item" href="mindfulness.html">Mindfulness Meditation</a>
              <a class="dropdown-item" href="transcendental.html">Transcendental Meditation</a>
              <a class="dropdown-item" href="zen.html">Zen Meditation</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="login.html"><button id="login" type="submit">LogIn</button></a>
    </form>
  </div>
</nav>
	<div class="bodysignup">
		<?php
      	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["register"]=="Register")
      	{
      	$username=$_POST["username"];
      	$email=$_POST["your_email"];
      	$password=$_POST["password"];
      	$con=mysqli_connect("localhost","brijudemel");
      	if (!$con)
      	{
        		die("Could not connect: ".mysqli_error());
      	}
        	mysqli_select_db($con,"tranquility");
        	$qu="insert into users values('$username','$email','$password')";
        	mysqli_query($con,$qu);
       	mysqli_close($con);
        	echo "<script type='text/javascript'>alert('Welcome $username');</script>";
      	}
      ?>
	<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">By Logging in You are chooing the path to enlighten your mind!</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ffb400;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff5900;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <label for="email">Email</label>
        <input type="email" id="email">
        <label for="password">Password</label>
        <input type="password" id="password">
        <input type="submit" id="submit" value="Submit">
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>