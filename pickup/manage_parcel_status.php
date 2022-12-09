
<?php 
include'db_connect.php';
if (isset($_POST['submit'])){
    $reference_number=$_POST['reference_number'];
    $s_name=$_POST['s_name'];
    $s_address=$_POST['s_address'];
    $s_mobile=$_POST['s_mobile'];
    $r_name=$_POST['r_name'];
    $r_address=$_POST['r_address'];
    $r_mobile=$_POST['r_mobile'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $price=$_POST['price'];
    $type=$_POST['type'];
    $date_created=$_POST['date_created'];
    
    
  
	$sql="insert into `parcel` (reference_number, s_name, s_address, s_mobile, r_name, r_address, r_mobile, weight, height, price, type, date_created)
	values ('$reference_number','$s_name','$s_address','$s_mobile','$r_name','$r_address','$r_mobile','$weight','$height','$price','$type','$date_created')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Parcel entered successfully!";
		header('location:view_parcel.php');
	}else{
		die(mysqli_error("Connection failed: " .($conn)));
	}
}
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Parcel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
<h3><b><u>Manage Parcel Status</u></b></h3>
<!-- Parcel Details -->
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Tracking Number</th>
	<th scope="col">Weight</th>
	<th scope="col">Height</th>
	<th scope="col">Price</th>
	<th scope="col">Type</th>
	<th scope="col">Status</th>
	<th scope="col">Action</th>
	</tr>
</thead>
<tbody>
<?php

$sql="Select * from `parcel`";
$result=mysqli_query($conn, $sql);
if($result){
	// $row=mysqli_fetch_assoc($result);
	// echo $row['firstname'];
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$weight=$row['weight'];
		$height=$row['height'];
		$price=$row['price'];
		$type=$row['type'];
		$status=$row['status'];
	
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$weight.'</td>
		<td>'.$height.'</td>
		<td>'.$price.'</td>
		<td>'.$type.'</td>
		<td>'.$status.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="status.php?selectstatus='.$id.'">Select Status</button>
		</td>
		</tr>';
	}
}			
?>


</tbody>
</table>

</div>

</body> 

  <footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</footer>
</html>
