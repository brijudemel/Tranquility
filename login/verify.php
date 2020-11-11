<?php
	session_start();
	include "db_conn.php";
	if($_SESSION['otp']==$_POST['otp_entered'])
	{
		//$user_data = 'uname='. $_SESSION['uname']. '&name='. $_SESSION['name'];
		$uname=$_SESSION['uname'];
		$pass=$_SESSION['password'];
		$name=$_SESSION['name'];
		$age=$_SESSION['age'];
		$mail=$_SESSION['mail'];
		$sql = "INSERT INTO users(user_name, password, name,age,email) VALUES('$uname','$pass','$name','$age','$mail')";
       $result = mysqli_query($conn, $sql);
       if ($result)
       {
           	header("Location: signup.php?success=Your account has been created successfully you can login now");
	        exit();
       }
       else
       {
       		header("Location: signup.php?error=Unknown error occured");
	        exit();
       }
	}
	else
	{
		header("Location: enter_otp.php?error=OTP Not correct");
	   	exit();
	}
?>