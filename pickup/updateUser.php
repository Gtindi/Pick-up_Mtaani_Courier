<?php 
include'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$middlename=$row['middlename'];
$lastname=$row['lastname'];
$mobile=$row['mobile'];
$address=$row['address'];
$email=$row['email'];
$password=$row['password'];


if (isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	// $sql="insert into `user_db` (firstname, middlename, lastname, mobile, address, email, password)
	// values ('$firstname','$middlename','$lastname','$mobile','$address','$email','$password')";



    $sql="update `users` set id=$id,firstname='$firstname',middlename='$middlename',lastname='$lastname',mobile=$mobile,address='$address',email='$email',password='$password' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "Data updated successfully!";
		header('location:view_user.php');
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
<form method="POST">
  <h3> <b> Personal Information </b></h3>
  <div class = "form-group">
  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="firstname" class="form-control" name="firstname"  placeholder="First Name" value =<?php echo $firstname; ?>>
  </div>
  
	<div class="mb-3">
    <label for="middlename" class="form-label">Middle Name</label>
    <input type="middlename" class="form-control" name="middlename"  placeholder="Middle Name" value =<?php echo $middlename; ?>>
  </div>
  
    <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="lastname" class="form-control" name="lastname"  placeholder="Last Name" value =<?php echo $lastname; ?>>
  </div>
  
 <div class="mb-3">
    <label for="mobile" class="form-label">Phone No.</label>
    <input type="mobile" class="form-control" name="mobile"  placeholder="Phone Number" value =<?php echo $mobile; ?>>
  </div>
  
   <div class="mb-3">
    <label for="address" class="form-label">Address.</label>
    <input type="address" class="form-control" name="address"  placeholder="Address" value =<?php echo $address; ?>>
  </div>
  <br/>
  
  <h3> <b> System Credentials </b></h3>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your email address" value =<?php echo $email; ?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value =<?php echo $password; ?>>
  </div>


  	<button type="submit" name="submit" class="btn btn-primary">Update</button>
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
<script>
	// $('[name="password"],[name="cpass"]').keyup(function(){
	// 	var pass = $('[name="password"]').val()
	// 	var cpass = $('[name="cpass"]').val()
	// 	if(cpass == '' ||pass == ''){
	// 		$('#pass_match').attr('data-status','')
	// 	}else{
	// 		if(cpass == pass){
	// 			$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
	// 		}else{
	// 			$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
	// 		}
	// 	}
	// })
	// function displayImg(input,_this) {
	//     if (input.files && input.files[0]) {
	//         var reader = new FileReader();
	//         reader.onload = function (e) {
	//         	$('#cimg').attr('src', e.target.result);
	//         }

	//         reader.readAsDataURL(input.files[0]);
	//     }
	// }
	// $('#manage_user').submit(function(e){
	// 	e.preventDefault()
	// 	$('input').removeClass("border-danger")
	// 	start_load()
	// 	$('#msg').html('')
	// 	if($('[name="password"]').val() != '' && $('[name="cpass"]').val() != ''){
	// 		if($('#pass_match').attr('data-status') != 1){
	// 			if($("[name='password']").val() !=''){
	// 				$('[name="password"],[name="cpass"]').addClass("border-danger")
	// 				end_load()
	// 				return false;
	// 			}
	// 		}
	// 	}
	// 	$.ajax({
	// 		url:'ajax.php?action=save_user',
	// 		data: new FormData($(this)[0]),
	// 	    cache: false,
	// 	    contentType: false,
	// 	    processData: false,
	// 	    method: 'POST',
	// 	    type: 'POST',
	// 		success:function(resp){
	// 			if(resp == 1){
	// 				alert_toast('Data successfully saved.',"success");
	// 				setTimeout(function(){
	// 					location.replace('index.php?page=user_list')
	// 				},750)
	// 			}else if(resp == 2){
	// 				$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
	// 				$('[name="email"]').addClass("border-danger")
	// 				end_load()
	// 			}
	// 		}
	// 	})
	// })
</script>