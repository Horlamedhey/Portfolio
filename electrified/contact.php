<!DOCTYPE html>
<html>
	<head>
		<title>contact us</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
		<div class="center contactdiv animated flipInX" id="contactdiv">SEND US A MAIL</div>
		<form method="POST" action="" id="contactform">
			<div>
				<input type="text" name="name" class="conname animated fadeInLeftBig" id="conname" placeholder="Name">
				<input type="text" name="email" class="conemail animated fadeInLeftBig" id="conemail" placeholder="Email address">
				<input type="text" name="subject" class="subject animated fadeInLeftBig" id="subject" placeholder="Subject">
			</div>
			<div class="float">
				<textarea name="message" type="text" placeholder="Message" class="message animated fadeInLeftBig" id="message"></textarea>
			</div>
			<button type="submit" name="send" id="send" class="animated jackInTheBox float"><i class="fa fa-send"></i></button>
		</form>
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