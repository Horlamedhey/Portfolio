<?php 	
	include 'db.php';
	include 'session.php';
	if (isset($_POST['upavatar'])) {
	$pic=basename($_FILES["pic"]["name"]);
	$id=$_POST['hid'];

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="JPG" && $imageFileType !="png" && $imageFileType !="PNG" && $imageFileType !="jpeg" && $imageFileType !="JPEG" && $imageFileType !="gif" && $imageFileType !="GIF" ){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)){
	
			$q=mysqli_query($con,"UPDATE users SET avatar='$pic' WHERE id='$id'") or die(mysqli_error($con));
			if($q){
				header('location:profile.php?pic=updated');
			}
			else{
				header('location:profile.php?pic=err');
			}
		} else{
			die(mysqli_error($con));
		}	
	
	}
}
 ?>