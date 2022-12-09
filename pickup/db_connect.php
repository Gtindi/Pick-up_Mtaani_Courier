<?php
// $link = mysqli_connect("localhost","root","","cms_db");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pickupDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die(mysqli_error("Connection failed: " .($conn)));
}else{
  // echo "Database connected.";
}
?>
