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
    <h1>View Users</h1>
	<div class="container">
		<button class="btn btn-primary my-5">
			<a href="new_user.php" class="text-light">Add User</a>
		</button>
<table class="table table-striped-columns">
<thead>
	<tr>
	<th scope="col">Id Number</th>
	<th scope="col">First Name</th>
	<th scope="col">Middle Name</th>
	<th scope="col">Last Name</th>
	<th scope="col">Contact No.</th>
	<th scope="col">Address</th>
	<th scope="col">Email</th>
	<th scope="col">Password</th>
	</tr>
</thead>
<tbody>
<?php

$sql="Select * from `users`";
$result=mysqli_query($conn, $sql);
if($result){
	// $row=mysqli_fetch_assoc($result);
	// echo $row['firstname'];
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$firstname=$row['firstname'];
		$middlename=$row['middlename'];
		$lastname=$row['lastname'];
		$mobile=$row['mobile'];
		$address=$row['address'];
		$email=$row['email'];
		$password=$row['password'];
		echo ' <tr>
		<th scope="row">'.$id.'</th>
		<td>'.$firstname.'</td>
		<td>'.$middlename.'</td>
		<td>'.$lastname.'</td>
		<td>'.$mobile.'</td>
		<td>'.$address.'</td>
		<td>'.$email.'</td>
		<td>'.$password.'</td>
		<td>
		<button  class = "btn btn-primary" ><a class = "text-light" href="updateUser.php?updateid='.$id.'">Update</button>
		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteUser.php?deleteid='.$id.'">Delete</button>
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
