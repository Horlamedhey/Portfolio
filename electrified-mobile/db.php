<?php
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost","electrif_root","electrified.com.ng","electrif_electrified");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>