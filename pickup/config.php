<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "mtaani_db");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
    }else{
    //   echo "Database Connected";
        }
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/pickupmtaani/');
?>
