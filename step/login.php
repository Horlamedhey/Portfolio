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
			$_SESSION['user'] = $row['username'];
			header("location:profile.php");
	}else{

		header("location:login.php?login=false");
        
    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<title>login</title>
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
	<div class="down-15 xs-down-30 centered">
	<?php 
		if (@$_GET['login'] =='false') {
			echo "<span class='error'>Incorrect login details</span>";
		}
		else if (@$_GET['login'] =='no') {
			echo "<span class='error'>You have to login first <i class='fa fa-times indent'></i></span>";
		}
		else if (@$_GET['login'] =='cont') {
			echo "<span class='error cont'>Login to access your profile</span>";
		}
	 ?>
	</div>
	<div class="down-5 xs-down-50 centered">
		<form action="" method="post">
			<div><input type="text" name="username" placeholder="Username"></div>
			<div><input type="password" name="password" placeholder="Password"></div>
			<div><input type="submit" name="login" value="login" class="padded white submit"></div>
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