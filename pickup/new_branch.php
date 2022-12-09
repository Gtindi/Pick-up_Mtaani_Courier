<?php 
include'db_connect.php';
if (isset($_POST['submit'])){
	$street=$_POST['street'];
	$city=$_POST['city'];
	$county=$_POST['county'];
	$zipCode=$_POST['zipCode'];
	$country=$_POST['country'];
	$mobile=$_POST['mobile'];

	$sql="insert into `branch` (street, city, county, zipCode, country, mobile)
	values ('$street', '$city', '$county', '$zipCode', '$country', '$mobile')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Branch added successfully!";
		header('location:branch_list.php');
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
    <title>New Branch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
<form method="POST">
  <div class = "form-group">
  <div class="mb-3">
    <label for="street" class="form-label">Street/Building</label>
    <input type="street" class="form-control" name="street"  placeholder="Name of Street/Building">
  </div>
  
	<div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="city" class="form-control" name="city"  placeholder="city">
  </div>
  
    <div class="mb-3">
    <label for="county" class="form-label">County</label>
    <input type="county" class="form-control" name="county"  placeholder="County">
  </div>
  <div class="mb-3">
    <label for="zipCode" class="form-label">Zip Code / Postal Code</label>
    <input type="zipCode" class="form-control" name="zipCode"  placeholder="Zip Code / Postal Code">
  </div> 
 <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="country" class="form-control" name="country"  placeholder="Country">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Phone No.</label>
    <input type="mobile" class="form-control" name="mobile"  placeholder="Phone Number">
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
