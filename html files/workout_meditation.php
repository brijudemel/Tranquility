<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tranquility - Relax your mind</title>
	<link rel="stylesheet" href="..\CSS files\navbar.css">
	<link rel="stylesheet" href="..\CSS files\footer.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
<body>
	<header>
		<nav class="navbar navbar-expand-lg" style="background-color: #FFB400; position: static;width: 100%;" >
		  <a class="navbar-brand" href="#" style="color: #2D4059;"><h1 id="tranquility" >Tranquility</h1></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		   	<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link link" href="home.html">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="documentation.html">Documentation</a>
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
		     <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Video Gallery
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="c_v.html">For Children(5-12)</a>
		          <a class="dropdown-item" href="t_v.html">For Teenagers(13-17)</a>
		          <a class="dropdown-item" href="a_v.html">For Adults(18 & above)</a>
		        </div>
		      </li>
		      <li class="nav-item">
		      	<a href="gallery/index.html" class="nav-link">Audio Gallery</a>
		      </li>
		    </ul>
    <a href="../login/index.php"><button id="login">LogIn</button></a>
  </div>
</nav></header><br>
<br>
<div class="row">
	<div class="col-sm-9" style="border-right: 1px solid #ccc;">
			<section style="margin-left: 2rem;">
	<h1>Meditate before or after workout to improve health</h1>
	<h3>A mind and body practice</h3>
	<p style="font-size: 1.4rem;">Meditation doesn’t have to be a long drawn out process to have a positive impact on your workout. You can meditate before or after workout with just a few deep breaths to lower blood pressure and reduce conditions such as anxiety, depression and insomnia. The simple act of putting a hand over your heart or your palms together over your chest triggers your parasympathetic nervous system, which is the part of the involuntary nervous system that serves to slow the heart rate and relax the muscles. This calming effect helps you cultivate a positive mindset, which in turn allows you to decompress and sleep better. These lasting benefits post workout help to boost your immune system so you’re left feeling your best.</p><hr>
	<h3>Combining meditation with exercise:</h3>
	<p style="font-size: 1.4rem;">Exercise alone also improves your mood by increasing oxygen and blood flow to the brain. This helps to reduce symptoms of depression, promote mental clarity, slow the aging process and improve the muscle strength and health of your organs. Together exercise and meditation provide the most valuable impact on your health.</p><hr>
	<h3>Meditation to prep body for workout or recover in cool-down</h3>
	<p style="font-size: 1.4rem;">You can meditate before or after workout and have it be valuable. Doing meditation before your workout allows you to connect with your body and be present in each movement. This helps ensure you are getting the most out of your workout by engaging the correct muscles that should be activated in each exercise. Meditation post-workout gives you a chance to slow your breathing and your heart-rate and feel gratitude for the work you’ve just done.</p><hr>
	<h3>Meditate before or after workout positions</h3>
	<p style="font-size: 1.4rem;">Meditation can be done before or after workout either in a sitting, standing or lying position. It’s a matter of personal preference. However, comfort is key so that your body can fully relax and your mind can be present. In either of these positions you should have your palms facing up resting at your side, on your thighs or across your chest.  If you are sitting or standing focus on keeping your posture in an upright position with your shoulders down and spine erect. Concentrate on relaxing each muscle in your body to release any tension and slow your breathing.</p><hr>
	<h3>Types of meditation</h3>
	<p style="font-size: 1.4rem;">A guided meditation involves listening to someone lead you through a breathing or talking meditation. This can be done using an app such as Headspace, Calm or Insight Timer. If you are a beginner this can be a good place to start. Silent meditations involve focusing on either the sounds around you or different parts of your body. This you can do on your own. Both styles are effective for achieving desirable results on your health. </p>
	<hr>
	<ul style="list-style-type: square;font-size: 1.4rem;">
		<li>Let your breath flow as deep down into your belly as is comfortable, without forcing it.</li>
		<li>Try breathing in through your nose and out through your mouth.</li>
		<li>Breathe in gently and regularly. Some people find it helpful to count steadily from 1 to 5. You may not be able to reach 5 at first.</li>
		<li>Then, without pausing or holding your breath, let it flow out gently, counting from 1 to 5 again, if you find this helpful.</li>
		<li>Keep doing this for 3 to 5 minutes.</li>
	</ul>
	<a href="..\login\logout.php" class="btn btn-warning">Log Out</a><br>
</section>
</div>
<div class="col-sm-2">
		<h3>Musics for you to set your mind in pace during the meditation</h3>
		<audio controls>
		  <source src="..\Media\1.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  <source src="..\Media\2.mp3" type="audio/ogg">
		  </audio>
		  <source src="..\Media\3.mp3" type="audio/ogg">
		  <audio controls>
		  <source src="..\Media\4.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\5.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\6.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\7.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\8.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\9.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\10.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\11.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\12.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\13.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\14.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\15.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\16.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\17.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\18.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\19.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\20.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\21.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\22.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\23.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\24.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\25.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\26.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\27.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\28.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\29.mp3" type="audio/ogg">
		  </audio>
		  <audio controls>
		  	<source src="..\Media\30.mp3" type="audio/ogg">
		  </audio>
	</div>
</div>
<footer style="background-color: #EAECEE;">
	<div class="row" style="padding: 50px;">
		<div class="col-sm-6">
			<p style="font-style: cursive;font-size: 40px;"><img src="..\pictures\logo1.png" class="img-responsive img-fluid">  Tranquility</p>
			<p><img src="..\pictures\whatsapp.png"><b>  <a class="link" href="tel:+919947810225">9947810225</a></b></p>
			<p><img src="..\pictures\facebook.png"><b>  <a class="link" href="#">TranquilityInd</a></b></p>
			<p><img src="..\pictures\instagram.png"><b>  <a class="link" href="#">tranquility_ind</a></b> </p>
			<p><img src="..\pictures\email.png"><b>  <a class="link" href="mailto: tranquilityproject20@gmail.com">tranquilityproject20@gmail.com</a></b></p>
		</div>
		<div class="col-sm-6">
			<h4>Join Us</h4>
			<p>Enter your name and email to get updates from us</p>
			<form name="form" onsubmit="return validate()" method="post" style='display:inline;'>
				<label class="b" for="name">Name - </label>
				<input class="b" type="text" name="name" placeholder="Enter your name">
				<label class="b" for="mail">E-Mail - </label>
				<input class="b" type="email" name="mail" placeholder="Enter E-Mail address" required>
				<input class="b" type="submit" name="submit" value="Subscribe">
			</form>
			<br><br><br>
			<div class="row">
				<div class="col-sm-6">
					<h4>About</h4>
					<p>A place where you can find everything you need to set you mind free form all the mess, A place where you can find what is best for you, A place to listen some plesant music and on and on and on....</p>
				</div>
				<div class="col-sm-6">
					<ul>
						<li><a class="link" href="home.html">Home</a></li>
						<li><a class="link" href="documentation.html">Documentation</a></li>
						<li><a class="link" href="login.html">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="foot"><p>Copyright &copy; 2020, All Rights reserved</p></div>
</footer>
</body>
</html>