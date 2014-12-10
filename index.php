<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fox Valley Tax Prep</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<header>
			<a class="anchor" id="top"></a>
			<ul class="nav nav-pills">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class=""><a href="deductions.php">Deductions</a></li>
				<?php
				session_start();
				if (isset($_SESSION['uid'])) {
					$usid = $_SESSION['uid'];
					$db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
					$rows = $db->query("SELECT username, password, role FROM Login WHERE username='$usid';");
					foreach($rows as $row)
					{	
						$role = $row[2];
						break;
					}
					if($role == "customer"){
				?>
						<li class=""><a href="customermain.php">Customer Main</a></li>
						<li class=""><a href="logout.php">Log Out</a></li>
				<?php
					}else{
				?>
						<li class=""><a href="employeemain.php">Employee Main</a></li>
						<li class=""><a href="logout.php">Log Out</a></li>
				<?php
					}
				}else{
				?>
					<li class=""><a href="signup0.php">Sign Up</a></li>
					<li class=""><a href="login0.php">Log In</a></li>
				<?php
				}
				?>	
				
			</ul>			
		</header>
		<div class="jumbotron">
    		<img src="img/authorized.png" alt="" class="pull-right img-responsive img-rounded">
		  	<h1 class="title">Welcome to Fox Valley Tax Prep</h1>
		  	<div class="row">
		  		<div class="col-lg-6">
		  			<img src="img/confused.png" alt="" class="img-responsive">
		  		</div>
		  		<div class="col-lg-6">
		  			<p>Confused about the latest tax laws?  Look no further!  At Fox Valley Tax Prep, we will prepare and electronically file your taxes for you.  You could have your return back in as little a time as a week.  If there are no issues with your return, most returns will be returned by the IRS within three weeks.  Conviently located at 555 Main St. in the City of Neenah.</p>
		  			<p>Sign-up to make an appointment online, or call (920) 111-2222.</p>
		  			<div class="row">
		  				<div class="col-lg-9 col-lg-offset-3">
				  			<table class="hours">
				  				<thead>
					  				<tr>
					  					<th>Days</th>
					  					<th>Hours</th>
					  				</tr>
					  			</thead>
					  			<tbody>
					  				<tr>
					  					<td>Monday-Friday</td>
					  					<td>9am - 7pm</td>			  					
					  				</tr>
					  				<tr>
					  					<td>Saturday</td>
					  					<td>9am - 4pm</td>
					  				</tr>
					  				<tr>
					  					<td>Sunday</td>
					  					<td>Closed</td>
					  				</tr>
					  			</tbody>	
				  			</table>	
				  		</div>
				  	</div>
		  		</div>
		  	</div>
		 	<div id="videos">
		 		<iframe width="854" height="510" src="http://www.youtube.com/embed/6Q3NPgHZzDo" allowfullscreen>
		 		</iframe>
			</div>
			
		</div>			
		<footer>
			<div class="linkbar">
				<!-- mostly decorative link bar -->
				<a href="#top">Jump to Top</a>
			</div>
			<small>Photo courtesy of https://twentiestribe.wordpress.com</small>
		</footer>
            <p id = "validate">
                <a href="http://validator.w3.org/check/referer">Validate Me</a>
            </p>
			<p>
				<small>Website created as a project by computer science students at the University of Wisconsin Oshkosh</small>
			</p>
	</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
</body>
</html>
