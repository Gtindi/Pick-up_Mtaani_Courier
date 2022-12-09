<?php 
include 'db_connect.php'; ?>
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
	<div class="container">
		<button class="btn btn-primary my-5">
			<a href="new_parcel.php" class="text-light">Add Parcel</a>
		</button>

		<h3><b><u>Sender Information</u></b></h3>
		<!--Sender Information---->
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Tracking Number</th>
	<th scope="col">Name</th>
	<th scope="col">Address</th>
	<th scope="col">Contact No.</th>
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
		$s_name=$row['s_name'];
		$s_address=$row['s_address'];
		$s_mobile=$row['s_mobile'];
	
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$s_name.'</td>
		<td>'.$s_address.'</td>
		<td>'.$s_mobile.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="updateParcel.php?updateid='.$id.'">Update</button>
		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteParcel.php?deleteid='.$id.'">Delete</button>
		</td>
		</tr>';
	}
}			
?>
</tbody>
</table>

<h3><b><u>Recipient Information</u></b></h3>
<!--Recipient Information-->
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Tracking Number</th>
	<th scope="col">Name</th>
	<th scope="col">Address</th>
	<th scope="col">Contact No.</th>
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
		$r_name=$row['s_name'];
		$r_address=$row['s_address'];
		$r_mobile=$row['s_mobile'];
	
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$r_name.'</td>
		<td>'.$r_address.'</td>
		<td>'.$r_mobile.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="updateParcel.php?updateid='.$id.'">Update</button>
		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteParcel.php?deleteid='.$id.'">Delete</button>
		</td>
		</tr>';
	}
}			
?>
</tbody>
</table>
<h3><b><u>Parcel Details</u></b></h3>
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
	<th scope="col">Date Created</th>
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
		$date_created=$row['date_created'];
	
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$weight.'</td>
		<td>'.$height.'</td>
		<td>'.$price.'</td>
		<td>'.$type.'</td>
		<td>'.$status.'</td>
		<td>'.$date_created.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="updateParcel.php?updateid='.$id.'">Update</button>
		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteParcel.php?deleteid='.$id.'">Delete</button>
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
