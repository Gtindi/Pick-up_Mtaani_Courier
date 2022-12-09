<?php
include 'db_connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `parcel` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Successfully!!";
        header('location:view_parcel.php');
    }else{
        die(mysqli_error("Connection failed: " .($conn)));
    }
}
?>