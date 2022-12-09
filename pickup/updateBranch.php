<?php 
include'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `branch` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$street=$row['street'];
$city=$row['city'];
$county=$row['county'];
$zipCode=$row['zipCode'];
$country=$row['country'];
$mobile=$row['mobile'];

if (isset($_POST['submit'])){
	$street=$_POST['street'];
	$city=$_POST['city'];
	$county=$_POST['county'];
	$zipCode=$_POST['zipCode'];
	$country=$_POST['country'];
	$mobile=$_POST['mobile'];

    $sql="update `branch` set id=$id,street='$street',city='$city',county='$county',zipCode='$zipCode',country='$country',mobile='$mobile' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "Branch added successfully!";
		header('location:./index.php?page=branch_list');
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
  <?php include 'header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include 'topbar.php' ?>
  <?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title ?></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<form method="POST">
  <div class = "form-group">
  <div class="mb-3">
    <label for="street" class="form-label">Street/Building</label>
    <input type="street" class="form-control" name="street"  placeholder="Name of Street/Building" value=<?php echo $street; ?>>
  </div>
  
	<div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="city" class="form-control" name="city"  placeholder="city" value=<?php echo $city; ?>>
  </div>
  
    <div class="mb-3">
    <label for="county" class="form-label">County</label>
    <input type="county" class="form-control" name="county"  placeholder="County" value=<?php echo $county; ?>>
  </div>
  <div class="mb-3">
    <label for="zipCode" class="form-label">Zip Code / Postal Code</label>
    <input type="zipCode" class="form-control" name="zipCode"  placeholder="Zip Code / Postal Code" value=<?php echo $zipCode; ?>>
  </div> 
 <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="country" class="form-control" name="country"  placeholder="Country" value=<?php echo $country; ?>>
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Phone No.</label>
    <input type="mobile" class="form-control" name="mobile"  placeholder="Phone Number" value=<?php echo $mobile; ?>>
  </div>
  	<button type="submit" name="submit" class="btn btn-primary" href="./index.php?page=branch_list">Submit</button>
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
