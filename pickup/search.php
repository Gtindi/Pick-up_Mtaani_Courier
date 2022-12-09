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
    <h1>View Track</h1>
	<div class="container">
		<!-- <button class="btn btn-primary my-5">
			<a href="new_user.php" class="text-light">Add User</a>
		</button> -->
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
	</tr>
</thead>
<tbody>
<?php
// $conn = mysqli_connect("localhost", "root", "","pickupDB");
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM parcel WHERE id LIKE '%$name%'";
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
		    </tr>';

	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>














<?php

// $sql="Select * from `users`";
// $result=mysqli_query($conn, $sql);
// if($result){
// 	// $row=mysqli_fetch_assoc($result);
// 	// echo $row['firstname'];
// 	while($row=mysqli_fetch_assoc($result)){
// 		$id=$row['id'];
// 		$firstname=$row['firstname'];
// 		$middlename=$row['middlename'];
// 		$lastname=$row['lastname'];
// 		$mobile=$row['mobile'];
// 		$address=$row['address'];
// 		$email=$row['email'];
// 		$password=$row['password'];
// 		echo ' <tr>
// 		<th scope="row">'.$id.'</th>
// 		<td>'.$firstname.'</td>
// 		<td>'.$middlename.'</td>
// 		<td>'.$lastname.'</td>
// 		<td>'.$mobile.'</td>
// 		<td>'.$address.'</td>
// 		<td>'.$email.'</td>
// 		<td>'.$password.'</td>
// 		<td>
// 		<button  class = "btn btn-primary" ><a class = "text-light" href="updateUser.php?updateid='.$id.'">Update</button>
// 		<button  class = "btn btn-danger" ><a class = "text-light" href="deleteUser.php?deleteid='.$id.'">Delete</button>
// 		</td>
// 		</tr>';
// 	}
// }			
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
