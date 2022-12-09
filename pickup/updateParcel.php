<!DOCTYPE html>
<html lang="en">
<?php 
include'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `parcel` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$s_name=$row['s_name'];
$s_address=$row['s_address'];
$s_mobile=$row['s_mobile'];
$r_name=$row['r_name'];
$r_address=$row['r_address'];
$r_mobile=$row['r_mobile'];
$weight=$row['weight'];
$height=$row['height'];
$price=$row['price'];
$type=$row['type'];
$date_created=$row['date_created'];
$status=$row['status'];


if (isset($_POST['submit'])){
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


    $sql="update `parcel` set id=$id,s_name='$s_name',s_address='$s_address',s_mobile='$s_mobile',r_name='$r_name',r_address='$r_address',r_address='$r_address',r_mobile='$r_mobile',weight='$weight',height='$height',price='$price',type='$type',date_created='$date_created',status='$status' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "Branch added successfully!";
		header('location:./index.php?page=parcel_list');
	}else{
		die(mysqli_error("Connection failed: " .($conn)));
	}
}
?>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <form method="POST">
            <h3> <b> Sender Information </b></h3>
            <div class = "form-group">

            <div class="mb-3">
                <label for="s_name" class="form-label">Name</label>
                <input type="s_name" class="form-control" name="s_name"  placeholder="Name" value=<?php echo $s_name; ?>>
            </div>

            <div class="mb-3">
                <label for="s_address" class="form-label">Address.</label>
                <input type="s_address" class="form-control" name="s_address"  placeholder="Address" value=<?php echo $s_address; ?>>
            </div>
            
            <div class="mb-3">
                <label for="s_mobile" class="form-label">Phone No.</label>
                <input type="s_mobile" class="form-control" name="s_mobile"  placeholder="Phone Number" value=<?php echo $s_mobile; ?>>
            </div>
            <br/>

            <h3> <b> Recipient Information </b></h3>
            <div class="mb-3">
                <label for="r_name" class="form-label">Name</label>
                <input type="r_name" class="form-control" name="r_name"  placeholder="Name" value=<?php echo $r_name; ?>>
            </div>

            <div class="mb-3">
                <label for="r_address" class="form-label">Address.</label>
                <input type="r_address" class="form-control" name="r_address"  placeholder="Address" value=<?php echo $r_address; ?>>
            </div>

            <div class="mb-3">
                <label for="r_mobile" class="form-label">Phone No.</label>
                <input type="r_mobile" class="form-control" name="r_mobile"  placeholder="Phone Number" value=<?php echo $r_mobile; ?>>
            </div>
            <br/>
            <h3> <b> Parcel Details </b></h3>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="weight" class="form-control" name="weight"  placeholder="Weight" value=<?php echo $weight ; ?>>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="height" class="form-control" name="height"  placeholder="Height" value=<?php echo $height; ?>>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="price" class="form-control" name="price"  placeholder="Price" value=<?php echo $price; ?>>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="type" class="form-control" name="type"  placeholder="Type" value=<?php echo $type; ?>>
            </div>

            <div class="mb-3">
                <label for="date_created" class="form-label">Date created</label>
                <input type="date" class="form-control" name="date_created"  placeholder="Date Created" value=<?php echo $date_created; ?>>
            </div>

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
      </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://www.sourcecodester.com/">sourcecodester.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b><?php echo $_SESSION['system']['name'] ?></b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->
<?php include 'footer.php' ?>
</body>
</html>
