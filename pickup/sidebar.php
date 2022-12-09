<?php include 'config.php'; ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
   	<a href="./" class="brand-link">
        <?php
	        // $disp = 'Admin';
	        $admin = "SELECT * FROM `users` WHERE `role` LIKE '%Admin%'";
	        $result = mysqli_query($conn,$admin);
          // $query=("SELECT * users WHERE username='$username'");
          // if (isset($_POST['submit'])){
          if(!$result){          
        ?>
            <h3 class="text-center p-0 m-0"><b>Admin</b></h3>
        <?php }else{?>
            <h3 class="text-center p-0 m-0"><b>Staff</b></h3>
        <?php };?>
    </a>
      
    </div>
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>     
          <?php 
	        $disp = 'admin';
	        $sele = "SELECT * FROM users WHERE username LIKE '%$dis%'";
	        $result = mysqli_query($conn,$sele);
          $query=("SELECT * users WHERE username='$username'");
          if(!$result){ 
          ?>
          <li class="nav-item">
            <a href="branch_list.php" class="nav-link nav-edit_branch">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Branch
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_branch" class="nav-link nav-new_branch tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=branch_list" class="nav-link nav-branch_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_staff">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Branch Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }else{?>
            
        <?php };?>
          <li class="nav-item">
            <a href="view_parcel.php" class="nav-link nav-edit_parcel">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Parcels
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_parcel" class="nav-link nav-new_parcel tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=parcel_list" class="nav-link nav-parcel_list nav-sall tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=item_accepted" class="nav-link nav-parcel_list nav-sall tree-item" name="0">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Item Accepted by <br> Pick-up Mtaani</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=collected" class="nav-link nav-parcel_list nav-sall tree-item" name="1">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Collected</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=shipped" class="nav-link nav-parcel_list nav-sall tree-item" name="2">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Shipped</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=in_transit" class="nav-link nav-parcel_list nav-sall tree-item" name="3">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>In-Transit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=arrived_destination" class="nav-link nav-parcel_list nav-sall tree-item" name="4">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Arrived At<br> Destination</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=out_of_delivery" class="nav-link nav-parcel_list nav-sall tree-item" name="5">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Out for Delivery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=ready_to_pickup" class="nav-link nav-parcel_list nav-sall tree-item" name="6">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Ready to Pickup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=delivered" class="nav-link nav-parcel_list nav-sall tree-item" name="7">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Delivered</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=picked_up" class="nav-link nav-parcel_list nav-sall tree-item" name="8">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Picked-up</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=unsuccessful" class="nav-link nav-parcel_list nav-sall tree-item" name="9">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Unsuccessful<br> Delivery Attempt</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item dropdown">
            <a href="./index.php?page=track" class="nav-link nav-track">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Track Parcel
              </p>
            </a>
          </li>  
           <li class="nav-item dropdown">
            <a href="./index.php?page=reports" class="nav-link nav-reports">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Reports
              </p>
            </a>
          </li>  
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}else{
        $('.nav-link.nav-'+page).parent().addClass('menu-open');
        $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active');
      }
     
  	})
  </script>