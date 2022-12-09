<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="index.php?page=reports" method="POST">
				<div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center">
					<label for="">Status</label>
					<div class="input-group col-sm-5">
						<!-- <input type="search" id="ref_no" class="form-control form-control-sm" placeholder="Type the tracking number here" name="name"> -->
                        <select type="search" name="name" value=<?php echo $status; ?> class="form-select" aria-label="Default select example" style="width:250px;">
		                    <option selected></option>
		                    <option name="name" >Item accepted by Pick-up Mtaani</option>
		                    <option name="name" >Collected</option>
		                    <option name="name" >Shipped</option>
		                    <option name="name" >In-Transit</option>
		                    <option name="name" >Arrived at destination</option>
		                    <option name="name" >Out for delivery</option>
		                    <option name="name" >Ready to Pickup</option>
		                    <option name="name" >Delivered</option>
		                    <option name="name" >Picked-up</option>
		                    <option name="name" >Unsuccessful Delivery Attempt</option>
                            <input type="submit" name="submit" class="btn btn-primary" value="Search" >
	                    </select>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="timeline" id="parcel_history">
				
			</div>
		</div>
	</div>
</div>
<div id="clone_timeline-item" class="d-none">
	<div class="iitem">
	    <i class="fas fa-box bg-blue"></i>
	    <div class="timeline-item">
	      <span class="time"><i class="fas fa-clock"></i> <span class="dtime">12:05</span></span>
	      <div class="timeline-body">
	      </div>
	    </div>
	  </div>
</div>


<body>
	<div class="container">
		<!-- <button class="btn btn-primary my-5">
			<a href="new_user.php" class="text-light">Add User</a>
		</button> -->
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">#</th>
	<th scope="col">Date</th>
	<th scope="col">Sender</th>
	<th scope="col">Recipient</th>
	<th scope="col">Amount</th>
	<th scope="col">Status</th>
	</tr>
</thead>
<tbody>
<?php
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM parcel WHERE status LIKE '%$name%'";
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
            <td>'.$date_created.'</td>
		    <td>'.$s_name.'</td>
            <td>'.$r_name.'</td>
            <td>'.$price.'</td>
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

