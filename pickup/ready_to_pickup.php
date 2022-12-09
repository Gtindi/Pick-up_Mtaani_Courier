<?php 
include 'db_connect.php'; 
// $output = '';
// if (isset($_POST['search'])){
// 	$searchq=$_POST['search'];
// 	$searchq=preg_replace("#[^0-9]#i","",$searchq);

// 	$query = mysqli_query("SELECT * FROM parcel WHERE id LIKE '%$searchq%'") or die("Could not search!");
// 	$count = mysqli_num_rows($query);
// 	if($count == 0){
// 		$output = 'There was no search results';
// 	}else{
// 		while ($row = mysqli_fetch_array($query)){
// 			$id = $row['id'];

// 			$output .= '<div> '.$id.'</div.';
// 		}
// 	}
// }

?>

<body>
	<div class="container">
		<!-- <button class="btn btn-primary my-5">
			<a href="new_user.php" class="text-light">Add User</a>
		</button> -->
			<!---Count -->
		<?php
		$sql="SELECT count(status) as total FROM `parcel` WHERE status LIKE '%Ready to Pickup%';";
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$total=$row['total'];

				echo '<p style="color:red;"><b>Number of parcel Ready to Pickup: '.$total.'</b><p>';
			}
		}
		?>
		<!---/Count-->
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Transaction Id</th>
	<th scope="col">Sender's Name</th>
	<th scope="col">Sender's Address</th>
	<th scope="col">Sender's Phone No.</th>
	<th scope="col">Recipient's Name</th>
	<th scope="col">Recipient's Address</th>
	<th scope="col">Recipient's Phone No.</th>
	<th scope="col">Weight</th>
    <th scope="col">Height</th>
    <th scope="col">Price</th>
    <th scope="col">Type</th>
	<th scope="col">Date Created</th>
	<th scope="col">Status</th>
	</tr>
</thead>
<tbody>
<?php
if($conn){
$name = $_POST['name'];

if(!$conn){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$dis = 'Ready to Pickup';
	$sele = "SELECT * FROM parcel WHERE status LIKE '%$dis%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
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

            echo ' <tr>
		    <th scope="row">'.$id.'</th>
		    <td>'.$s_name.'</td>
		    <td>'.$s_address.'</td>
		    <td>'.$s_mobile.'</td>
            <td>'.$r_name.'</td>
		    <td>'.$r_address.'</td>
            <td>'.$r_mobile.'</td>
		    <td>'.$weight.'</td>
            <td>'.$height.'</td>
            <td>'.$price.'</td>
		    <td>'.$type.'</td>
			<td>'.$date_created.'</td>
			<td>'.$status.'</td>
		    </tr>';

	}
}else{
print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>

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

  		}
     
  	})
  </script>