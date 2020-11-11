<?php
	session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign Up -Tranquility</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  <link rel="stylesheet" href="..\CSS files\navbar.css">
  <link rel="stylesheet" href="..\CSS files\signup.css">
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
</head>
<body class="form-v7">
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
  <div class="page-content">
    <div class="form-v7-content">
      <div class="form-left">
        <img src="https://i.pinimg.com/originals/4e/42/73/4e427361ae9d68911c07bd7852a9314a.jpg" alt="form">
        <p class="text-1">Sign Up</p>
        <p class="text-2">Privacy policy & Term of service</p>
      </div>
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
      <form class="form-detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="myform">
        <div class="form-row">
          <label for="username">USERNAME</label>
          <input type="text" name="username" id="username" class="input-text">
        </div>
        <div class="form-row">
          <label for="your_email">E-MAIL</label>
          <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
        </div>
        <div class="form-row">
          <label for="password">PASSWORD</label>
          <input type="password" name="password" id="password" class="input-text" required>
        </div>
        <div class="form-row">
          <label for="comfirm_password">CONFIRM PASSWORD</label>
          <input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
        </div>
        <div class="form-row-last">
          <input type="submit" name="register" class="register" value="Register">
          <p>Or<a href="login.html">Log in</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    jQuery.validator.setDefaults({
        debug: true,
        success:  function(label){
            label.attr('id', 'valid');
        },
    });
    $( "#myform" ).validate({
        rules: {
          your_email: {
              required: true,
              email: true
          },
          password: "required",
          comfirm_password: {
              equalTo: "#password"
          }
        },
        messages: {
          username: {
            required: "Please enter an username"
          },
          your_email: {
            required: "Please provide an email"
          },
          password: {
            required: "Please provide a password"
          },
          comfirm_password: {
            required: "Please provide a password",
              equalTo: "Wrong Password"
          }
        }
    });
  </script>
</body>
</html>