<?php
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['age'])&& isset($_POST['mail']))
{

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$age=validate($_POST['age']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$mail=validate($_POST['mail']);
	$user_data = 'uname='. $uname. '&name='. $name;
	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($mail)){
        header("Location: signup.php?error=MailId is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($age))
	{
		header("Location: signup.php?error=Age is required&$user_data");
	    exit();
	}
	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else
	{

		// hashing the password
        $_SESSION['uname'] =$uname;
        $_SESSION['password']=md5($pass);
        $_SESSION['age']=$age;
        $_SESSION['name']=$name;
        $_SESSION['mail']=$mail;
	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}
		else 
		{
			$_SESSION['otp']=rand(1000,9999);
			$to=$mail;
			$subject="Tranquility - Email Verification";
			$message= "<p>Your Registration OTP:". $_SESSION['otp']."</p>";
			$headers="FROM : tranquilityproject20@gmail.com";
			$headers.="MIME-Version: 1.0"."\r\n";
			$headers.="Content-type:text/html;charset-UTF-8"."\r\n";
			mail($to,$subject,$message,$headers);
            header("Location: enter_otp.php");
		}
	}
}
else
{
	header("Location: signup.php");
	exit();
}