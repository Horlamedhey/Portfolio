<?php 
	session_start();
      include 'session.php'; 
      include 'db.php';

      $user = $_SESSION['user'];
      $id = $_SESSION['id'];
      ?>
  <?php 
    $sql = "SELECT * FROM users where id='$id'";
               $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {
        
                while($row = mysqli_fetch_array($result)) {
                  $dispname = $row['name'];
                  $dispusername = $row['username'];
                  $disppass = $row['password'];
                  $dob = $row['dob'];
                  $quote = $row['quote'];
                  $avatar = $row['avatar'];
                }
              }
   ?>
 <?php 
 	if (isset($_POST['update'])) {
 		$name = $_POST['name'];
 		$username = $_POST['username'];
 		$password = md5($_POST['password']);
 		$dob = $_POST['dob'];
 		$quote = $_POST['quote'];

 		$query = "UPDATE users set name = '$name', username = '$username', password = '$password', dob = '$dob', quote = '$quote' WHERE id = '$id' ";
 		$result = mysqli_query($con,$query) or die(mysqli_error($con));

 		if ($result) {
 			echo "<script>alert('Profile Successfully updated')</script>";
 			header("location: profile.php");
 		}
 		else {
 			echo "<script>alert('Error')</script>";
 		}

 		
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<div class="down-15 xs-down-30 off-2 xs-off-1">
		<div class="mobile-only">
			<div class="xs-10 xs-off-1">
				<span class="large-text caps"><?php echo $dispusername; ?></span>
			</div>
		</div>
		<div class="col-12 xs-down-20">
			<div class="col-4">
			<?php 	
				if (@$_GET['pic'] == "updated") {
					echo "<script>alert('Profile Picture Updated Successfully')</script>";
				}
				else if (@$_GET['pic'] == "err") {
					echo "<script>alert('Network Error')</script>";
				}

				if ($avatar == null) {
					echo "<img src='images/default.png' class='img-circle'>";
				}else {
					echo "<img src='images/".$avatar."' class='img-circle'>";
				}
			 ?>
				<div class="down-5">
					<input type="button" id="gate" class="padded white update" value="Update Profile Pic" onclick="magic()">
				</div>
				<div class="down-5 hidden animated fadeIn" id="form">
					<form action="helper.php" method="post" enctype="multipart/form-data">
						<input type="file" name="pic" accept="image/*" required>
						<input type="hidden" name="hid" value="<?php echo $id; ?> ">
						<input type="submit" name="upavatar" value="Update">
					</form>
				</div>
			</div>
			<div class="col-6 xs-10 xs-off-1 hidden-xs quote">
				<span class="large-text caps"><?php echo $dispusername; ?></span>
				<div class="quote down-5">
					<div><i class="fa fa-quote-left"></i></div>
					<div class="indent"><?php echo $quote; ?></div>
					<div class="right"><i class="fa fa-quote-right"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="col-3 off-2 down-5 xs-10 xs-off-1">
			<form action="" method="post" class="form">
			<span class="profile-edit-header">Edit Your Profile</span>
				<input type="" name="name" class="edit" placeholder="<?php echo $dispname;?> __Your name">
				<input type="" name="username" class="edit" placeholder="<?php echo $dispusername;?> __Username">
				<input type="" name="password" class="edit" placeholder=" __Change password">
				<input type="" name="dob" class="edit" placeholder="<?php echo $dob; ?> __Birthday Date">
				<input type="" name="quote" class="edit" placeholder="Favourite quote" id="edit">
				<div class="centered"><input type="submit" name="update" class="padded white update" value="Update"></div>
			</form>
		</div>
		<div class="col-5 off-1">
			<div class="col-10 off-1">
				<div class="col-12 centered">
					<span class="pos">My Posts</span>
				</div>
			</div>
		</div>
	</div>
	<div class="down-10 col-10 right xs-down-30 xs-10 inline"><a href="logout.php" class="padded white">Sign out</a></div>
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
		function magic(){
			document.getElementById('form').style.display = 'block';
			document.getElementById('gate').className += " animated fadeOut";
			// document.getElementById('gate').style.display = 'none';
			
		}
	</script>
</body>
</html>