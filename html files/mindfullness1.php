<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mindfulness Meditation-Tranquility</title>
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
	<style type="text/css">
		*
		{
			font-family: Montserrat,sans-serif;
		}
		.inner-li
		{
			padding-left: 30px;
		}
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
<div class="row">
	<div class="col-sm-9" style="border-right: 1px solid #ccc;">
			<section style="margin-left: 2rem;">
	<h1 style="text-align: center;">Mindfulness Meditation</h1>
	<h3>What is Mindfulness meditation?</h3>
	<p style="padding: 40px;">
		It's easy to get caught up in a pattern of swirling thoughts—thinking about a laundry list of things that need to be done, ruminating on past events, or could-be situations of the future—and learning mindfulness can help. But what exactly is mindfulness?<br>It can be defined as a mental state that involves being fully focused on "the now" so you can acknowledge and accept your thoughts, feelings, and sensations without judgment. Mindfulness meditation is a mental training practice that teaches you to slow down racing thoughts, let go of negativity, and calm both your mind and body.<br>Mindfulness techniques can vary, but in general, mindfulness meditation involves a breathing practice and awareness of body and mind. Practicing mindfulness meditation doesn't require props or preparation (no need for candles, essential oils, or mantras, unless you enjoy them). To get started, all you need is a comfortable place to sit, 3 to 5 minutes of free time, and a judgment-free mindset.
	</p><hr>
	<h3>How to Get Started</h3>
	<p>
		Learning mindfulness meditation is straightforward enough to practice on your own, but a teacher or program can also help you get started, particularly if you're practicing meditation for specific health reasons. Here are some simple steps to help you get started on your own.
	</p>
	<ul>
		<li>
			<h5>Set Aside Meditation Time</h5>
			<p>Whether you set your alarm 30 minutes before little ones rise or set aside time to wind down a few minutes prior to bedtime, do your best to carve out a time each day to practice mindfulness mediation. And don't be too hard on yourself if life gets in the way; just try again tomorrow.</p>
		</li>
		<li>
			<h5>Get Comfortable</h5>
			<p>Find a quiet and comfortable place. Sit in a chair or on the floor with your head, neck, and back straight but not stiff. It's also helpful to wear comfortable, loose clothing so you're not distracted.</p>
		</li>
		<li>
			<h5>Consider a Timer</h5>
			<p>While it's not necessary, a timer (preferably with a soft, gentle alarm) can help you focus on meditation and forget about time—and eliminate any excuses you have for stopping and doing something else.<br>Since many people lose track of time while meditating, it can also ensure you're not meditating for too long. Be sure to also allow yourself time after meditation to become aware of where you are and get up gradually.</p>
		</li>
		<li>
			<h5>Focus on Breathing</h5>
			<p>Become aware of your breath, attuning to the sensation of air moving in and out of your body as you breathe. Feel your belly rise and fall and the air enter your nostrils and leave your mouth. Pay attention to the way each breath changes and is different.</p>
		</li>
		<li>
			<h5>Give Yourself a Break</h5>
			<p>If you find yourself getting carried away in your thoughts—whether with worry, fear, anxiety, or hope—observe where your mind went, without judgment, and just return to your breathing. Don't be hard on yourself if this happens; the practice of returning to your breath and refocusing on the present is the practice of mindfulness.</p>
		</li>
		<li>
			<h5>Use Tranquility</h5>
			<p>If you're having trouble practicing mindfulness meditation on your own, consider signing up with us. To get free meditations and a variety of tools to help you get centered throughout your day.</p>
		</li>
	</ul>
	<h3>Mindfulness in Your Daily Life</h3>
	<p>As you practice mindfulness meditation, it helps to find ways to bring mindfulness into your everyday life—especially on those days when life is too busy to carve out a minute alone. Mindfulness meditation is one technique, but everyday activities and tasks provide plenty of opportunities for mindfulness practice.<br>You can do most things mindfully, says Monahan. "Anytime that you are resting your attention in the present moment and whatever you are doing/experiencing you are practicing being mindful," she says. "Not only does this enrich the present moment activity/experience you're engaging in, but it also allows you to be present in your time rather than going back into the past or into the future."</p>
	<ul>
		<li><b>Brushing your teeth:</b> Feel your feet on the floor, the brush in your hand, and your arm moving up and down.</li>
		<li><b>Doing dishes:</b> Savor the feeling of the warm water on your hands, the look of the bubbles, and the sounds of the pans clunking on the bottom of the sink.</li>
		<li><b>Doing laundry:</b> Pay attention to the smell of the clean clothes and feel of the fabric. Add a focus element and count your breaths as you fold laundry.</li>
		<li><b>Driving:</b> Turn off the radio—or put on something soothing, like classical music—imagine your spine growing tall, find the half-way point between relaxing your hands and gripping the wheel too tightly, and whenever you notice your mind wandering, bring your attention back to where you and your car are in space.</li>
		<li><b>Exercising:</b> Instead of watching television while on the treadmill, try focusing on your breathing and where your feet are in space as you move.</li>
		<li><b>Getting kids ready for bed:</b> Get down to the same level as your kids, look in their eyes, listen more than you talk, and savor any snuggles. When you relax, they will too.</li>
	</ul>
	<a href="..\login\logout.php" class="btn btn-warning">Log Out</a><br>
</section><br>
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
			<p style="font-style: cursive;font-size: 40px;"><img src="../pictures/logo1.png" class="img-responsive img-fluid">  Tranquility</p>
			<p><img src="../pictures/whatsapp.png"><b>  <a class="link" href="tel:+919947810225">9947810225</a></b></p>
			<p><img src="../pictures/facebook.png"><b>  <a class="link" href="#">TranquilityInd</a></b></p>
			<p><img src="../pictures/instagram.png"><b>  <a class="link" href="#">tranquility_ind</a></b> </p>
			<p><img src="../pictures/email.png"><b>  <a class="link" href="mailto: tranquilityproject20@gmail.com">tranquilityproject20@gmail.com</a></b></p>
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