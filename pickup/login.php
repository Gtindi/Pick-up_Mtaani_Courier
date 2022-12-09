<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pick-up Mtaani</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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

					<div style="width: 80%; margin: 20px auto;">
						<form method="post" action="login.php" >
							<h2>Welcome To Pick-up Mtaani<br/>Login</h2>
							<?php include(ROOT_PATH . '/includes/errors.php') ?>
							<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
							<input type="password" name="password" placeholder="Password">
							<button type="submit" id="btn btn-primary" name="login_btn" style="background-color: #00AFB8;">Login</button>
							<p>
								Not yet a member? <a href="register.php">Sign up</a>
							</p>
						</form>
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