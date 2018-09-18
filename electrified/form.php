<!-- register -->
<?php 
	// session_start();
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_POST['register'])){
	        // removes backslashes
		$name = stripslashes($_POST['name']);
	        //escapes special characters in a string
		$name = mysqli_real_escape_string($con,$name); 
		$dob = stripslashes($_POST['dob']);
		$dob = mysqli_real_escape_string($con,$dob);
		$username = stripslashes($_POST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = md5($_POST['password']);
		$trn_date = date("Y-m-d H:i:s");

		
		$query = "INSERT into `users` (name, dob, username, email, password, trn_date) VALUES ('$name', '$dob', '$username', '$email', '$password', '$trn_date')";
	    $result = mysqli_query($con,$query) or die(mysqli_error($con));
	    if($result){
	    	echo "<script>alert('Registered Successfully');</script>";
		}
		else {
			echo "<script>alert('error');</script>";
		}
	}
?>
<!-- login -->
<?php  
require('db.php');
session_start();
if (isset($_POST['login'])){
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = md5($_POST['password']);
	//print_r($_POST);exit();

	$sql = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password= '$password' ") or die(mysqli_error($con));
	
	if (mysqli_num_rows($sql) > 0) {
		$row = mysqli_fetch_array($sql);
		// session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			header("location:profile.php");
	}else{

		header("location:form.php?login=false");
        
    }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign up/Log in</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body id="body1">
		<div class="ent animated zoomIn" id="ent">
			<div class="animated fadeInLeft" id="entdiv">OYE & SONS ELECTRICAL AND ELECTRONICS CORPORATIONS</div>
		</div>
		<div class="animated fadeInLeft lododiv" id="logodiv">
			<a href="index.php"><img src="images/3.jpeg" class="logo animated rubberBand" id="logo"></a>
		</div>
		<nav id="nav" class="animated fadeInDown">
			<a href="home.php" id="a1">Home</a>
			<a href="about.php" id="a2">About us</a>
			<a href="contact.php" id="a3">Contact us</a>
			<a href="register.php" id="a4">Register</a>
			<a href="login.php" id="a5">Login</a>
			<a href="form.php" id="a6">Login/Register</a>
			<a href="profile.php" id="a7">Profile</a>
			<a href="form.html" id="a8">Login/Register</a>
		</nav>
		<div class="msg animated bounce" id="msg">
			Input your login details below or fill the 'Sign up' form if you're not a member yet.
		</div>
		<div class="col-12 formdiv" id="formdiv">
			<div class="col-4 off-1 align-center float">
				<form class="form" method="post" action="" name="myform" onsubmit="return(validate());">
					<div class="signdiv">Sign up</div>
					<div class="inputdiv">
						<div>
							<input class="input" id="name" type="text" name="name" placeholder="Name" class="sample" autocomplete="on" size="60" maxlength="100">
						</div>
						<div class="me"></div>
						<div>
							<input class="input" id="DoB" type="date" name="dob" placeholder="DD/MM/YY" autocomplete="on" size="60">
						</div>
						<div>
							<input class="input" id="username" type="text" name="username" placeholder="Username" autocomplete="on" size="60" maxlength="100">
						</div>
						<div>
							<input class="input" id="email" type="email" name="email" placeholder="E-mail" autocomplete="on" size="60" maxlength="100">
						</div>
						<div>
							<input class="input" id="password" type="password" name="password" placeholder="Password" autocomplete="on" size="60" maxlength="100">
						</div>
						<div>
							<input class="input" id="re_password" type="password" name="re-password" placeholder="Confirm Password" autocomplete="off" size="60" maxlength="100">
						</div>
						<div>
							<input class="input" id="register" type="submit" name="register" value="Register">
						</div>
						<!-- <div>
							<input class="input" type="reset" value="Reset">
						</div> -->
					</div>
				</form>
			</div>
			<div class="line float off-1-5" id="line"></div>
			<div class="col-4 off-0-5 align-center float">
				<form class="form" method="post" action="" name="myform1" onsubmit="return(validate1());">
					<div class="signdiv">Log in</div>
					<div class="inputdiv">
						<div>
							<input id="username1" class="input" type="text" name="username" placeholder="Username" autocomplete="on" size="60" maxlength="100">
						</div>
						<div>
							<input id="password1" class="input" type="password" name="password" placeholder="Password" autocomplete="on" size="60"	maxlength="100">
						</div>
						<div>
							<input class="input" id="login" type="submit" name="login" value="Log in">
						</div>
						<!-- <div>
							<input class="input" type="reset" value="Reset">
						</div> -->
					</div>
				</form>
			</div>
		</div>
		<div class="formfooter footer">
			<div class="abticondiv">
				<a href="" class="map">Site Map <i class="fa fa-sitemap"></i></a>
				<div class="iconsubdiv">
					<i class="fa fa-facebook-official"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-google-plus"></i>
				</div>
				<a href="#entdiv" class="top">Top <i class="fa fa-home"></i></a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/script.js"></script>
</html>