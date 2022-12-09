<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "test";

 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass); 
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Done..";
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }

 include_once 'class.User.php';
 $user=new USER($DBcon);
?>