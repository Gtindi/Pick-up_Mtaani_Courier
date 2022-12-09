<?php 
include'db_connect.php';
$id=$_GET['selectstatus'];
$sql="Select * from `parcel` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$status=$row['status'];


if (isset($_POST['submit'])){
     $status=$_POST['status'];


    $sql="update `parcel` set status='$status' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "Branch added successfully!";
		header('location:manage_parcel_status.php');
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

<h3> <b> Status for parcel_id:</b> <?php echo $id; ?> <b>is:</b> <i><?php echo $status; ?></i></h3>
<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <!-- <input type="status" class="form-control" name="status"  placeholder="Status"> -->
    <select type="status" name="status" value=<?php echo $status; ?> class="form-select" aria-label="Default select example" style="width:250px;">
		<option selected></option>
		<option name="status" >Item accepted by Pick-up Mtaani</option>
		<option name="status" >Collected</option>
		<option name="status" >Shipped</option>
		<option name="status" >In-Transit</option>
		<option name="status" >Arrived at destination</option>
		<option name="status" >Out for delivery</option>
		<option name="status" >Ready to Pickup</option>
		<option name="status" >Delivered</option>
		<option name="status" >Picked-up</option>
		<option name="status" >Unsuccessful Delivery Attempt</option>
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