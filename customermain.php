<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox Valley Tax Prep</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="themes/calendar_white.css">  
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script> 
    <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script> 
</head>

<body>
	<div class="container">
        <ul class="nav nav-pills">
            <li class=""><a href="index.html">Home</a></li>
            <li class=""><a href="services.php">Services</a></li>
            <li class=""><a href="deductions.html">Deductions</a></li>
            <li class="active"><a href="customermain.php">Customer</a></li>
            <li class=""><a href="logout.php">Logout</a></li>
        </ul> 
	<div class="row">
	    <div class="downloadFiles">
		    <h4>Download File</h4>
		   
		    <form action="download.php" method="post">
<?php
				session_start();    
				$sessionID = $_SESSION['uid'];
			   if ($handle = opendir('file_uploads/')) {
?>
				<select name="images">
<?php
				while (false !== ($entry = readdir($handle))) {
					if ($entry != "." && $entry != "..") {
						if((string)$entry == $sessionID.".pdf"){
?>
						<option>
<?php
							print $entry;
?>
						</option>
<?php
						}
					}
				}
?>
				</select>
<?php
				closedir($handle);
			}
?>
			   <input type="submit" class="btn btn-primary" value="download"/>
		    </form>
		</div>
	</div>			
        <div class="row calendar">
            <div class = "col-lg-2 col-lg-offset-2">
                <div id="nav"></div>
            </div>
            <div class = "col-lg-8">
                <div id="dp"></div>
            </div>
        </div>        
	            
<?php
?>     
        <p id = "validate">
            <a href="http://validator.w3.org/check/referer">Validate Me</a>
        </p>
	</div>
	<script src=>"js/bootstrap.min.js"></script>
    <script src="js/calender.js" type="text/javascript"></script>
</body>
</html>
