<?php 
include'db_connect.php';
if (isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$branch=$_POST['branch'];
  
	$sql="insert into `staff` (firstname, lastname, mobile, branch)
	values ('$firstname','$lastname','$mobile','$branch')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Staff added successfully!";
		header('location:staff_list.php');
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
    
<form method="POST">
  
  <div class = "form-group">
  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="firstname" class="form-control" name="firstname"  placeholder="First Name">
  </div>
    
    <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="lastname" class="form-control" name="lastname"  placeholder="Last Name">
  </div>
  
 <div class="mb-3">
    <label for="mobile" class="form-label">Phone No.</label>
    <input type="mobile" class="form-control" name="mobile"  placeholder="Phone Number">
  </div>
  
   <div class="mb-3">
    <label for="branch" class="form-label">Branch</label>
    <input type="branch" class="form-control" name="branch"  placeholder="Branch">
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
