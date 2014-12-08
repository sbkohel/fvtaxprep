<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fox Valley Tax Prep Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<header>
			<a class="anchor" name="top"></a>
				<ul class="nav nav-pills">
					<li class=""><a href="index.html">Home</a></li>
					<li class=""><a href="services.php">Services</a></li>
					<li class=""><a href="deductions.html">Deductions</a></li>
					<li class=""><a href="signup0.php">Sign Up</a></li>
					<li class="active"><a href="login0.php">Log In</a></li>
				</ul>
		</header>	
		<?php
		session_start();
		if (isset($_SESSION['uid'])) {
			echo "user is already logged in!";
		?>
			<br/><a class='link' href='logout.php'>logout</a><br/>
		<?php
		} 
		else{
		?>
		<div class="row">	
			<div class="col-lg-9 col-lg-offset-3">
				<h2>Log In</h2>
				<form id="login" action="login.php" method="post">
					<dl>
						<dt>Username</dt><dd><input type="text" name="username" /></dd>
						<dt>Password</dt><dd><input type="password" name="password"/></dd>
						<dt></dt>	 <dd><input type="submit" class="btn btn-primary" value="Go"/></dd>
					</dl>
				</form>
			</div>
		</div>
		<?php
		}	
		?>
		<footer>
			<div class="linkbar">
				<!-- mostly decorative link bar -->
				<a href="#top">Jump to Top</a>
			</div>
		</footer>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
