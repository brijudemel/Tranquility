<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tranquility - Body Scan</title>
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
	<h1>Body Scan for stress relief</h1>
	<p style="font-size: 1.4rem;">Sometimes you can be so caught up in your stress, that you don't realize that the physical discomfort you're experiencing—such as headaches, back and shoulder pain, and tense muscles—is connected to your emotional state.<br>Body scan meditation is a good way to release tension you might not even realize you're experiencing. Body scanning involves paying attention to parts of the body and bodily sensations in a gradual sequence from feet to head.<br>By mentally scanning yourself, you bring awareness to every single part of your body, noticing any aches, pains, tension, or general discomfort. The goal is not to relieve the pain completely, but to get to know it and learn from it so you can better manage it.</p><hr>
	<div class="row container">
		<div class="col-sm">
			<p style="font-size: 1.3rem;">Here is a audio for you to set your mind in pace during the meditation</p>
		</div>
		<div class="col-sm">
			<audio controls>
			  <source src="..\Media\14.mp3" type="audio/ogg">
			</audio>
		</div>
	</div>
	<hr>
	<h3>Steps Involved</h3>
	<ol style="list-style-type: decimal;font-size: 1.4rem;">
		<li><b>Get comfortable.</b> Lying down is preferable, particularly if you're doing a body scan meditation before you fall asleep. If that's not possible or comfortable, sitting comfortably is also an option.</li>
		<li><b>Take a few deep breaths.</b> Let your breathing slow down, and start breathing from your belly instead of from your chest, letting your abdomen expand and contract with each breath. If you find your shoulders rising and falling with each breath, focus more on breathing from your belly, as though a balloon is inflating and deflating in your abdomen with each breath. For more practice, try these breathing exercises.</li>
		<li><b>Bring awareness to your feet.</b> Now slowly bring your attention down to your feet. Begin observing sensations in your feet. If you notice pain, acknowledge it and any thoughts or emotions that accompany it, and gently breathe through it.</li>
		<li><b>Breathe into the tension.</b> If you notice any uncomfortable sensations, focus your attention on them. Breathe into them, and see what happens. Visualize the tension leaving your body through your breath and evaporating into the air. Move on when you feel ready.</li>
		<li><b>Scan your entire body.</b> Continue this practice with each area of your body, gradually moving up through your feet until you reach the top of your head. Notice how you feel and where you're holding your stress. If there's any tightness, pain, or pressure, continue to breathe into any tightness, pain, or pressure you're feeling. This can help you release tension in your body now, and be more aware of it in the future so you can release it then, too.</li>
	</ol>
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