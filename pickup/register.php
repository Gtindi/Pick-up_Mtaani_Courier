<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pick-up Mtaani</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
			.button:hover {
				background-color: #07EAF5;
				color: black;
			}
		</style>
	</head>
	<body id="page-wrapper">
		<!-- Page Wrapper -->
			<!-- <div id="page-wrapper"> -->

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Pick-up Mtaani</a></h1>
						
					</header>

					<div class="container">
					<!-- Navbar -->
					<header id="header" class="alt">
						<h1><a href="index.html">Pick-up Mtaani</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="index0.html" class="menuToggle"><span>Home</span></a>
									<div id="menu">	</div>
								</li>
							</ul>
						</nav>
					</header>
					<!-- // Navbar -->

					<div class="container">
					<div style="width: 40%; margin: 20px auto;">
						<form method="post" action="register.php" >
							<h2>Register on Pick-up Mtaani</h2>
							<?php include(ROOT_PATH . '/includes/errors.php') ?>
							<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
							<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
							<input type="password" name="password_1" placeholder="Password">
							<input type="password" name="password_2" placeholder="Password confirmation">
							<button type="submit" id="btn btn-primary" name="reg_user" style="background-color: #00AFB8;">Register</button>
							<p>
								Already a member? <a href="login.php">Sign in</a>
							</p>
						</form>
					</div>
				</div>
						<!-- </div> -->
						<!-- // container -->

						<!-- Footer -->
							<?php 
							// include( ROOT_PATH . '/includes/footer.php'); ?>
						<!-- // Footer -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>
</html>