<?php 
	session_start();
      include 'session.php'; 
      include 'db.php';

      $username = $_SESSION['username'];
      $id = $_SESSION['id'];
      ?>
  <?php 
    $sql = "SELECT * FROM users where username='$username' and id='$id'";
               $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {
        
                while($row = mysqli_fetch_array($result)) {
                  $name = $row['name'];
                  $username = $row['username'];
                  $passWORD = $row['password'];
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
			<a href="profile.php" id="a6">Profile</a>
		</nav>
	<div class="down-15 xs-down-50 off-2 xs-off-1">
		<div><span class="large-text">Welcome <?php echo $username; ?></span></div>
		<div><span class="large-text">Your name is  <?php echo $name; ?></span></div>
		<div><span>This is your personal profile page <?php echo $username; ?>, your password is <span class="pages"><?php echo $passWORD; ?></span></span></div>
		<div><span>Your password has been encrypted at sign up...so you are safe</span></div>
		<div class="down-10"><a href="logout.php" class="padded white">Sign out</a></div>
	</div>
	<div class="down-10">
		<span class="s"></span>
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