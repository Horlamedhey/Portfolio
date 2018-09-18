<?php 
	if (!isset($_SESSION['username'])){
			 header ("Location: login.php?login=false");
		}
?>