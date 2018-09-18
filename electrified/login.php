<?php  
include('db.php');
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
			header("location:profile.php?login=ok");
	}
	else{

		header("location:register.php?login=false");
        
    }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
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
		<nav id="nav" onmouseover="swapcolor1()" onmouseout="swapcolor2()"">
			<a href="home.php" id="a1">Home</a>
			<a href="about.php" id="a2">About us</a>
			<a href="contact.php" id="a3">Contact us</a>
			<a href="register.php" id="a4">Register</a>
			<a href="login.php" id="a5">Login</a>
			<a href="form.php" id="a6">Login/Register</a>
			<a href="profile.php" id="a7">Profile</a>
			<a href="form.html" id="a8">Login/Register</a>
		</nav>
		<div class="col-4 off-4 align-center logdiv">
			<form class="form" method="post" action="" name="myform1" onsubmit="return(validate1());">
				<div class="signdiv  animated fadeInDown">Log in</div>
				<div class="inputdiv">
					<div>
						<input id="username1" class="input animated fadeInRightBig" type="text" name="username" placeholder="Username" autocomplete="on" size="60" maxlength="100">
					</div>
					<div>
						<input id="password1" class="input animated fadeInRightBig" type="password" name="password" placeholder="Password" autocomplete="on" size="60"	maxlength="100">
					</div>
					<div>
						<input class="input animated fadeInRightBig" id="login" type="submit" name="login" value="Log in">
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
		</div>
	</body>
	<script type="text/javascript" src="js/script.js"></script>
</html>