<?php 
include 'db_connect.php'; ?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
			<!---Count Staff-->
			<?php
		$sql="SELECT count(id) as total FROM `branch`";
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$total=$row['total'];

				echo '<h1 style="color:red;"><b>Number of branch: '.$total.'</b></h1>';
			}
		}
		?>
		<!---/Count Staff-->
	<div class="container">
		<button class="btn btn-primary my-5">
			<a href="./index.php?page=new_branch" class="text-light">Add Branch</a>
		</button>
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Id Number</th>
	<th scope="col">Street/Building</th>
	<th scope="col">City</th>
	<th scope="col">County</th>
	<th scope="col">Zip Code</th>
	<th scope="col">Country</th>
	<th scope="col">Phone No.</th>
	<th scope="col">Action</th>
	</tr>
</thead>
<tbody>
<?php

$sql="Select * from `branch`";
$result=mysqli_query($conn, $sql);
if($result){
	// $row=mysqli_fetch_assoc($result);
	// echo $row['firstname'];
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$street=$row['street'];
		$city=$row['city'];
		$county=$row['county'];
		$zipCode=$row['zipCode'];
		$country=$row['country'];
		$mobile=$row['mobile'];
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$street.'</td>
		<td>'.$city.'</td>
		<td>'.$county.'</td>
		<td>'.$zipCode.'</td>
		<td>'.$country.'</td>
		<td>'.$mobile.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="updateBranch.php?updateid='.$id.'">Update</button>
		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteBranch.php?deleteid='.$id.'">Delete</button>
		</td>
		</tr>';
	}
}			
?>


</tbody>
</table>
</div>

</body> 

  <footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</footer>
</html>