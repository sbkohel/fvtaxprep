<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Website</title>
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
					<li class="active"><a href="signup.html">Sign Up</a></li>
					<li class=""><a href="login.html">Log In</a></li>
				</ul>
		</header>
		<nav>
			<!-- have a side panel to link to website pages?  -->
				
		</nav>
		<article>
			<!-- use for main text of page -->
			
			 <div class="row  pad-top">
<?php
				$name = $_POST['firstName'];
				echo "<h1>Thanks for registering with us: " . $name . "</h1>";
?>
			</div>
		</article>

		<footer>

		</footer>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
