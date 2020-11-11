<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tranquility - Main page</title>
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
<h2 class="container">Hey <?php echo $_SESSION['name']; ?>, You can find the personalised meditations for you right here.</h2>
<p style="font-size: 1.4rem;"  class="container">You can view exercises for teens here, as you are  <?php echo $_SESSION['age']; ?></p>
<section class="container">
	<div class="card-deck">
	  <div class="card">
	    <img src="https://da28rauy2a860.cloudfront.net/wellbeing/wp-content/uploads/2017/06/02152910/Yoga_teens_mind_web.gif" alt="breathing-exercise-759-getty-images">
	    <div class="card-body">
	      <h5 class="card-title">Breathing exercise for stress relief</h5>
	      <p class="card-text">Early morning stress relief exercise to set your mind in peace and to welcome the beautiful day ahead.</p>
	      <a href="stress_relief.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 10 mins</small>
	    </div>
	  </div>
	  <div class="card"> 
	    <img src="https://lightheartnj.com/wp-content/uploads/teen-yoga.jpg" class="card-img-top" alt="yoga-asanas-for-stress-relief-these-5-yoga-poses-will-help-reduce-stress-and-anxiety-2040355">
	    <div class="card-body">
	      <h5 class="card-title">Yoga asanas for stress relief</h5>
	      <p class="card-text">Relieve Youself with traditional Yoga Practices</p>
	      <a href="yoga_asnas.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 20 mins</small>
	    </div>
	  </div>
	  <div class="card">
	    <img src="https://1vtpn436ien52nbceb34bii2-wpengine.netdna-ssl.com/wp-content/uploads/2018/04/guided-body-scan-meditation-1170x658.jpg" class="card-img-top" alt="body-scan-meditation-why-and-how-3144782">
	    <div class="card-body">
	      <h5 class="card-title">Body Scan</h5>
	      <p class="card-text">Body scan meditation is a good way to release tension you might not even realize you're experiencing. Body scanning involves paying attention to parts of the body and bodily sensations in a gradual sequence from feet to head.</p>
	      <a href="bodyscan.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 15 mins</small>
	    </div>
	  </div>
	<br>
	<div class="card-deck">
	  <div class="card">
	    <img src="https://www.yogajournal.com/.image/t_share/MTQ2MTgwNjcyNzYzOTk1NTgx/yoga-woman-relaxed-meditation.jpg" class="card-img-top" alt="progressive-muscle-relaxation">
	    <div class="card-body">
	      <h5 class="card-title">Progressive Mind and Muscle Relaxation</h5>
	      <p class="card-text">Everyday stress does not only affect our mind but our body. Lets meditate to keep our mind and body regulated.</p>
	      <a href="progressive_relaxation1.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 25 mins</small>
	    </div>
	  </div>
	  <div class="card">
	    <img src="https://drjameswellborn.com/wp-content/uploads/2016/12/Girl-with-heart-hands.jpg" class="card-img-top" alt="Loving-Kindness-pexels-photo-1399034-e1549291063173">
	    <div class="card-body">
	      <h5 class="card-title">Loving Kindness</h5>
	      <p class="card-text">Loving kindness meditation (LKM) is a popular self-care technique that can be used to boost well-being and reduce stress.</p>
	      <a href="lovingkindness1.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 5 mins</small>
	    </div>
	  </div>
	  <div class="card">
	    <img src="https://static.onecms.io/wp-content/uploads/sites/35/2019/06/16183629/stretching-before-bed-yoga-poses_0.jpg" class="card-img-top" alt="how-to-meditate-before-bed">
	    <div class="card-body">
	      <h5 class="card-title">Meditation for sleep</h5>
	      <p class="card-text">If a racing mind is keeping you up at night, meditation might be just the sleep aid that you need. The mind-calming practice can be done at bedtime—or anytime during the day—to help fight fatigue and insomnia. </p>
	      <a href="sleep_meditation.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 15 mins</small>
	    </div>
	  </div>
	</div>
	<br>
	<div class="card-deck">
	  <div class="card">
	    <img src="https://learnenglishteens.britishcouncil.org/sites/teens/files/styles/teen7_hero_banner_big/public/field/hero-promo/image/gettyimages-539246041-2.png?itok=0xrrxbsG" class="card-img-top" alt="student-meditation">
	    <div class="card-body">
	      <h5 class="card-title">Meditation for Focus before and after study</h5>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	      <a href="study_meditation.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 5 mins</small>
	    </div>
	  </div>
	  <div class="card">
	    <img src="https://declutterthemind.com/wp-content/uploads/meditationafterexercise.jpg" class="card-img-top" alt="meditate-before-or-after-workout">
	    <div class="card-body">
	      <h5 class="card-title">Workout Meditation</h5>
	      <p class="card-text">Meditate before or after workout to improve health.</p>
	      <a href="workout_meditation.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 5 mins</small>
	    </div>
	  </div>
	  <div class="card">
	    <img src="https://1.bp.blogspot.com/-yOERWVp6bIo/Xb5p0XB5_GI/AAAAAAAAAV0/k-r1eF8rR4o3gLUjlLD_502j_JE_td3JwCLcBGAsYHQ/s640/pexels-photo-2908175.jpeg" class="card-img-top" alt="mindfulness-meditation">
	    <div class="card-body">
	      <h5 class="card-title">Mindfullness</h5>
	      <p class="card-text">It can be defined as a mental state that involves being fully focused on "the now" so you can acknowledge and accept your thoughts, feelings, and sensations without judgment. Mindfulness meditation is a mental training practice that teaches you to slow down racing thoughts, let go of negativity, and calm both your mind and body.</p>
	      <a href="mindfullness1.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 15 mins</small>
	    </div>
	  </div>
	</div>
	<br>
	<div class="card-deck">
 		<div class="card">
	    <img src="https://enlightenmentportal.com/wp-content/uploads/2015/03/law-of-attraction-visualization-and-meditation.jpg" class="card-img-top" alt="visualization-meditation">
	    <div class="card-body">
	      <h5 class="card-title">Visualization Meditation</h5>
	      <p class="card-text">When you visualize, you focus on something specific — an event, person, or goal you want to achieve — and hold it in your mind, imagining your outcome becoming reality.Visualization is a mindfulness technique on its own, but you can also use it to enhance regular meditation.</p>
	      <a href="visualisation.php" class="stretched-link"></a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted">Exercise Time: 20 mins</small>
	    </div>
	  </div>
	</div>
</section><br>
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