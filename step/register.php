<?php 
	// session_start();
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_POST['register'])){
	        // removes backslashes
		$name = stripslashes($_POST['name']);
	        //escapes special characters in a string
		$name = mysqli_real_escape_string($con,$name); 
		$username = stripslashes($_POST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$pass = md5($_POST['password']);
		$trn_date = date("Y-m-d H:i:s");

		
		$query = "INSERT into `users` (name, username, password, trn_date) VALUES ('$name', '$username', '$pass', '$trn_date')";
	    $result = mysqli_query($con,$query) or die(mysqli_error($con));
	    if($result){
	    	echo "<script>alert('Registered Successfully');</script>";
	    	header("location: login.php?login=cont");
		}
		else {
			echo "<script>alert('error');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<nav class="hidden-xs">
		<a href="index.php">home </a>
		<a href="register.php">register </a>
		<a href="login.php">login </a>
		<a href="profile.php">profile </a>
	</nav>
	<div class="mobile-only">
		<div class="topnav" id="myTopnav">
			<a href="index.php">Home</a>
			<a href="register.php">Register</a>
			<a href="login.php">Login</a>
			<a href="profile.php">Profile</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		</div>
	</div>
	<!-- <div class="col-12 centered">
		<span class="large-text">Register</span>
	</div> -->
	<div class="centered down-15 xs-down-50">
		<form action="" method="post">
			<div><input type="text" name="name" placeholder="Name"></div>
			<div><input type="text" name="username" placeholder="Username"></div>
			<div><input type="password" name="password" placeholder="Password"></div>
			<div><input type="submit" name="register" value="register" class="padded white submit"></div>
		</form>
	</div>
	<script type="text/javascript">
		function myFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className === "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		}
	</script>

</body>
</html>