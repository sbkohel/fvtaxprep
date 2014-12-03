<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">    
</head>

<body>
	<div class="container">
        <ul class="nav nav-pills">
            <li class=""><a href="index.html">Home</a></li>
            <li class="active"><a href="services.php">Services</a></li>
            <li class=""><a href="deductions.html">Deductions</a></li>
            <li class=""><a href="signup.html">Sign Up</a></li>
            <li class=""><a href="login.html">Log In</a></li>
        </ul> 
			
        <div class="row">
            <div class = "col-lg-8 col-lg-offset-2 deduction">
                <table class="table table-bordered table-striped">  
                  <tr>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
					<tr> 
						<td width="246">
							<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
							<input name="userfile" type="file" id="userfile"> 
						</td>
						<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
					</tr>
				</table>
			</form>
			<?php
			$db = new PDO("mysql:dbname=vanlab18;host=localhost","vanlab18","Mountain123");
			$result = $db->query("SELECT id, name FROM upload");
			foreach($result as $row){
					$ran = $row['id'];
					$name = $row['name'];
					print "<a href=\"download.php?id=". $ran ."\">" . $name . "</a><br/>";
				}
			?>
                  </tr>
                  <tr><button id = "appointments">View Appointments</button></tr>
                  <tr><button id = "delete">Delete Appointments</button> </tr>
                    <h1>
                    Calender goes here
                    </h1>
                </table> 
            <div>
        </div>
        <p id = "validate">
            <a href="http://validator.w3.org/check/referer">Validate Me</a>
        </p>
	</div>
	<script src=>"js/bootstrap.min.js"></script>
</body>
</html>

