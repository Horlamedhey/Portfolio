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
	    	header("location:login.php?register=ok");
	   		}
		else {
			echo "<script>alert('error');</script>";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="body1">
		<div class="ent" id="ent">
			<div id="entdiv">OYE & SONS ELECTRICAL AND ELECTRONICS CORPORATIONS</div>
		</div>
		<div id="logodiv"><a href="index.php"><img src="images/30.jpeg" class="logo" id="logo"></a></div>
		<nav id="nav" onmouseover="swapcolor1()" onmouseout="swapcolor2()" class="bigscreen">
			<a href="home.php" id="a1">Home</a>
			<a href="about.php" id="a2">About us</a>
			<a href="contact.php" id="a3">Contact us</a>
			<a href="register.php" id="a4">Register</a>
			<a href="login.php" id="a5">Login</a>
			<a href="profile.php" id="a6">Profile</a>
		</nav>
		<nav id="smallnav" onmouseover="swapcolor1()" onmouseout="swapcolor2()">
			<div id="navbutdiv"><button class="off-1"><i class="fa fa-bars" id="navicon" onclick="navdisplay()"></i></button></div>
			<div class="hid" id="hid">
				<a href="home.php" id="a1">Home</a>
				<a href="about.php" id="a2">About us</a></>
				<a href="contact.php" id="a3">Contact us</a></>
				<a href="register.php" id="a4">Register</a></>
				<a href="login.php" id="a5">Login</a></>
				<a href="profile.php" id="a6">Profile</a></>
			</div>
		</nav>
		<?php 
		if (@$_GET['login']=="false") {
			echo "<div class='noacct'>Sorry, you do not have an account yet...Fill the form below to create one!</div>";
		} ?>
		<div class="align-center">
			<form class="form" method="post" action="" name="myform" onsubmit="return(validate());">
				<div class="signdiv animated fadeInDown" id="signdiv">Sign up</div>
				<div class="inputdiv">
					<div>
						<input class="input animated fadeInRightBig" id="name" type="text" name="name" placeholder="Name" autocomplete="on" size="60" maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="DoB" type="date" name="dob" placeholder="DD/MM/YY" autocomplete="on" size="60">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="username" type="text" name="username" placeholder="Username" autocomplete="on" size="60" maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="email" type="email" name="email" placeholder="E-mail" autocomplete="on" size="60" maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="password" type="password" name="password" placeholder="Password" autocomplete="on" size="60" maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="re_password" type="password" name="re-password" placeholder="Confirm Password" autocomplete="off" size="60" maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="register" type="submit" name="register" value="Register">
					</div>
				</div>
			</form>
		</div>
		<div class="footer">
			<div class="abticondiv">
				<a href="" class="map">Site Map <i class="fa fa-sitemap"></i></a>
				<div class="iconsubdiv">
					<i class="fa fa-facebook-official"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-google-plus"></i>
				</div>
				<a href="#entdiv" class="top">Top <i class="fa fa-home"></i></a>
			</div>
			<div class="abtcopydiv"><i class="fa fa-copyright"></i> 2017. All Rights Reserved</div>
		</div>
	</body>
	<script type="text/javascript" src="js/script.js"></script>
</html>