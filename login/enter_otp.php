<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tranquility- OTP Verification</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="verify.php" method="post">
     	<h2>OTP Verification</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label for="otp_entered">Enter OTP</label>
     	<input type="text" name="otp_entered" placeholder="4 digit OTP" min="1000" max="9999"><br>
     	<button type="submit">Verify</button>
     </form>
</body>
</html>