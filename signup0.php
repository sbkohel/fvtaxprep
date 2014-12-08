<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fox Valley Tax Prep</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="check.js" type="text/javascript"></script>
</head>
<body onload="start_signup()">
	<div class="container">
		<header>
				<ul class="nav nav-pills">
					<li class=""><a href="index.html">Home</a></li>
					<li class=""><a href="services.php">Services</a></li>
					<li class=""><a href="deductions.html">Deductions</a></li>
					<li class="active"><a href="signup0.php">Sign Up</a></li>
					<li class=""><a href="login0.php">Log In</a></li>
				</ul>
		</header>
		<nav>
			<!-- have a side panel to link to website pages?  -->
				
		</nav>
		<article>
			<!-- use for main text of page -->
			<?php
			session_start();
			if(isset($_SESSION['uid'])){
			echo "user is already logged in!";
			?>
			<br/><a class="link" href="logout.php" id="gohere">logout</a><br/>
			<?php
			} 
			else{
			?>
			 <div class="row  pad-top">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<h2>New to This Site?</h2>
					<div class="panel panel-primary">
						<div class="panel-heading">
					<strong>   Register Yourself </strong>  
						</div>
						<div class="panel-body">
							<form role="form" id="r_form" action="signup.php" method="POST">
								<br/>
									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
										<input type="text" id="r_fname" class="form-control" name="firstName" placeholder="First Name" />
									</div>
								 <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
										<input type="text" id="r_lname" class="form-control" name="lastName" placeholder="Last Name" />
									</div>
									 <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="text" id="r_addr" class="form-control" name="address" placeholder="Address" />
									</div>
								  <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
										<input type="text" id="r_phone" class="form-control" name="phone" placeholder="Phone" />
									</div>
								 <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="text" id="r_cell" class="form-control" name="cellPhone" placeholder="Cell" />
									</div>
									<div class="form-group input-group">
										<span class="input-group-addon">@</span>
										<input type="email" id="r_email" class="form-control" name="email" placeholder="Email" />
									</div>
									<div class="form-group input-group">
										<span class="input-group-addon"></span>
										<input type="text" id="r_username" class="form-control" name="username" placeholder="Choose Username" />
									</div>
									 <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
										<input type="password" id="r_pass1" class="form-control" name="password" placeholder="Password" />
									</div>
								 <div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
										<input type="password" id="r_pass2" class="form-control" name="confirmPassword" placeholder="Confirm Password" />
									</div>
								 <div class="form-group input-group">
								 	Sign up for emails: <input type="checkbox" id="r_esignup" name="esignup" value="y"/>
								 </div>
								<div class="form-group input-group">
									<span class="notify" id="notification1"></span>
								</div>
								<div class="form-group input-group">
									<span class="notify" id="notification2"></span>
								</div>
								<div class="form-group input-group">
									<span class="notify" id="notification3"></span>
								</div>
								 <input type="button" class="btn btn-primary" id="registerme" value="Register"> 
								<hr />
								Already Registered ?  <a href="login0.php" >Login here</a>
								</form>
						</div>				   
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</article>
		<footer>
			<div class="linkbar">
				<!-- mostly decorative link bar -->
            	<p id = "validate">
                	<a href="http://validator.w3.org/check/referer">Validate Me</a>
            	</p>
				<p>
					<small>Website created as a project by computer science students at the University of Wisconsin Oshkosh</small>
				</p>
			</div>
		</footer>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
