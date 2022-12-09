<?php 
include'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `staff` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$mobile=$row['mobile'];
$branch=$row['branch'];

if (isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$branch=$_POST['branch'];

    $sql="update `staff` set id=$id,firstname='$firstname',lastname='$lastname',mobile='$mobile',branch='$branch' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "Branch added successfully!";
    header('location:./index.php?page=staff_list');
		// header('location:staff_list.php');
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
    <title>New Stuff</title>
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
    <label for="firstname" class="form-label">First Name</label>
    <input type="firstname" class="form-control" name="firstname"  placeholder="First Name" value=<?php echo $firstname; ?>>
  </div>
    
    <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="lastname" class="form-control" name="lastname"  placeholder="Last Name" value=<?php echo $lastname; ?>>
  </div>
  
 <div class="mb-3">
    <label for="mobile" class="form-label">Phone No.</label>
    <input type="mobile" class="form-control" name="mobile"  placeholder="Phone Number" value=<?php echo $mobile; ?>>
  </div>
  
   <div class="mb-3">
    <label for="branch" class="form-label">Branch</label>
    <input type="branch" class="form-control" name="branch"  placeholder="Branch" value=<?php echo $branch; ?>>
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
