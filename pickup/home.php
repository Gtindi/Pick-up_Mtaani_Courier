<?php include('db_connect.php') ?>
<?php include('config.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
<?php 
if($_SESSION['login_type'] == 1): 
?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM branches")->num_rows; ?></h3>

                <p>Total Branches</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM parcels")->num_rows; ?></h3>

                <p>Total Parcels</p>
              </div>
              <div class="icon">
                <i class="fa fa-boxes"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></h3>

                <p>Total Staff</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <hr>
          <?php 
              $status_arr = array("Item Accepted by Courier","Collected","Shipped","In-Transit","Arrived At Destination","Out for Delivery","Ready to Pickup","Delivered","Picked-up","Unsuccessfull Delivery Attempt");
               foreach($status_arr as $k =>$v):
          ?>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM parcels where status = {$k} ")->num_rows; ?></h3>

                <p><?php echo $v ?></p>
              </div>
              <div class="icon">
                <i class="fa fa-boxes"></i>
              </div>
            </div>
          </div>
            <?php endforeach; ?>
      </div>

<?php 
else: 
  ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          	<h4>
              <center>
              <b>Welcome to Pick-up Mtaani</b>
              </center>     
            </h4>
          	</div>
          </div>
      </div>
          
<?php endif; ?>
<!DOCTYPE html>
<html>
<head>
<style>
.flex-container {
  display: flex;
  align-items: stretch;
  background-color: #f1f1f1;
}

.flex-container>div {
  background-color: DodgerBlue;
  color: white;
  width: 350px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
  
}
.flex-container>div:hover{
	background-color: black;
}
</style>
</head>
<body>



<?php
  // $disp = 'Admin';
  $admin = "SELECT * FROM `users` WHERE `role` LIKE '%Admin%'";
  $result = mysqli_query($conn,$admin);
  // $query=("SELECT * users WHERE username='$username'");
  // if (isset($_POST['submit'])){
  if(!$result){          
?>
  <div class="flex-container">
  <div style="order: 3"><a href="./index.php?page=new_branch" style="color:white;">Add Branch</a></div>
  <div style="order: 3"><a href="./index.php?page=branch_list" style="color:white;">View and Edit Branch</a></div>
  <div style="order: 2"><a href="./index.php?page=new_staff" style="color:white;">Add Staff</a></div>
  <div style="order: 2"><a href="./index.php?page=staff_list" style="color:white;">View and Edit Staff</a></div>
</div>

<?php }else{?>
<?php };?>
<div class="flex-container">
  <div style="order: 3"><a href="./index.php?page=new_parcel" style="color:white;">Add Parcel</a></div>
  <div style="order: 2"><a href="./index.php?page=parcel_list" style="color:white;">View and Edit Parcel</a></div>
  <div style="order: 4"><a href="./index.php?page=track" style="color:white;">Track Parcel</a></div> 
  <div style="order: 1"><a href="./index.php?page=reports" style="color:white;">View Report</a></div>
</div>


















</body>
</html>


