<?php 
include 'db_connect.php'; ?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Parcel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

<body>
	<div class="container">
		<!-- <button class="btn btn-primary my-5">
			<a href="new_user.php" class="text-light">Add User</a>
		</button> -->
			<!---Count -->
		<?php
		$sql="SELECT count(status) as total FROM `parcel` WHERE status LIKE '%Collected%';";
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$total=$row['total'];

				echo '<p style="color:red;"><b>Number of parcel Collected: '.$total.'</b><p>';
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
	$dis = 'Collected';
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

<footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </footer>
</html>