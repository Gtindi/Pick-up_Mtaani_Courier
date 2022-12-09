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
    $status=$_POST['status'];
    
    
  
	$sql="insert into `parcel` (reference_number, s_name, s_address, s_mobile, r_name, r_address, r_mobile, weight, height, price, type, date_created, status)
	values ('$reference_number','$s_name','$s_address','$s_mobile','$r_name','$r_address','$r_mobile','$weight','$height','$price','$type','$date_created','$status')";
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
    <title>Parcel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
<form method="POST">
<h3> <b> Sender Information </b></h3>
<div class = "form-group">

<div class="mb-3">
    <label for="s_name" class="form-label">Name</label>
    <input type="s_name" class="form-control" name="s_name"  placeholder="Name">
</div>

<div class="mb-3">
    <label for="s_address" class="form-label">Address.</label>
    <input type="s_address" class="form-control" name="s_address"  placeholder="Address">
</div>
  
<div class="mb-3">
    <label for="s_mobile" class="form-label">Phone No.</label>
    <input type="s_mobile" class="form-control" name="s_mobile"  placeholder="Phone Number">
</div>
<br/>

<h3> <b> Recipient Information </b></h3>
<div class="mb-3">
    <label for="r_name" class="form-label">Name</label>
    <input type="r_name" class="form-control" name="r_name"  placeholder="Name">
</div>

<div class="mb-3">
    <label for="r_address" class="form-label">Address.</label>
    <input type="r_address" class="form-control" name="r_address"  placeholder="Address">
</div>

<div class="mb-3">
    <label for="r_mobile" class="form-label">Phone No.</label>
    <input type="r_mobile" class="form-control" name="r_mobile"  placeholder="Phone Number">
</div>
<br/>

<h3> <b> Parcel Details </b></h3>

<div class="mb-3">
    <label for="reference_number" class="form-label">Reference number</label>
    <input type="reference_number" class="form-control" name="reference_number"  placeholder="Reference number">
</div>

<div class="mb-3">
    <label for="weight" class="form-label">Weight</label>
    <input type="weight" class="form-control" name="weight"  placeholder="Weight">
</div>

<div class="mb-3">
    <label for="height" class="form-label">Height</label>
    <input type="height" class="form-control" name="height"  placeholder="Height">
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="price" class="form-control" name="price"  placeholder="Price">
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="type" class="form-control" name="type"  placeholder="Type">
</div>

<div class="mb-3">
    <label for="date_created" class="form-label" style="width:250px;">Date created</label>
    <input type="date" class="form-control" name="date_created"  placeholder="Date Created">
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <!-- <input type="status" class="form-control" name="status"  placeholder="Status"> -->
    <select type="status" class="form-select" name="status" aria-label="Default select example" style="width:250px;">
		<option selected></option>
		<option name="status" value="Item accepted by Pick-up Mtaani">Item accepted by Pick-up Mtaani</option>
		<option name="status" value="Collected">Collected</option>
		<option name="status" value="Shipped">Shipped</option>
		<option name="status" value="In-Transit">In-Transit</option>
		<option name="status" value="Arrived at destination">Arrived at destination</option>
		<option name="status" value="Out for delivery">Out for delivery</option>
		<option name="status" value="Ready to Pickup">Ready to Pickup</option>
		<option name="status" value="Delivered">Delivered</option>
		<option name="status" value="Picked-up">Picked-up</option>
		<option name="status" value="Unsuccessful Delivery Attempt">Unsuccessful Delivery Attempt</option>
	</select>
</div>


<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<br/>
</div>
</form>
  </body>
  
  <footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </footer>
</html>