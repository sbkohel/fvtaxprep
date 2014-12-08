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
    <script src="js/calender.js" type="text/javascript"></script>  
</head>

<body>
	<div class="container">
        <ul class="nav nav-pills">
            <li class=""><a href="index.html">Home</a></li>
            <li class=""><a href="services.php">Services</a></li>
            <li class=""><a href="deductions.html">Deductions</a></li>
            <li class="active"><a href="employeemain.php">Employee</a></li>
       </ul> 
        <div class="row calendar">
            <div class = "col-lg-2">
                <div id="nav"></div>
            </div>
            <div class = "col-lg-8">
                <div id="dp"></div>
            </div>
        
            <div class="col-lg-2">
                <div class="uploadFile">
    		         <h4>Upload File</h4>
        			<form action="upload.php" method="post" enctype="multipart/form-data">
        				<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        				<input type="file" name="fileToUpload" id="fileToUpload"> 
        				<input name="upload" type="submit" class="box btn btn-primary" id="upload" value=" Upload ">
        			</form>
                </div>            
			    <div class="downloadFiles">
				    <h4>Download File</h4>
				   
				    <form action="download.php" method="post">
<?php
					   if ($handle = opendir('file_uploads/')) {
?>
						<select name="images">
<?php
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
?>
								<option>
<?php
									print $entry;
?>
								</option>
<?php
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
        </div>                 
        <div class="row">
            <div class="col-lg-6">
                <form method="post" action="changePrice.php">
                    <fieldset>
                        <legend>Admin Creation</legend>
                        <div class="row">
                            <div class="col-lg-4 text-right">
                                <h4>Username</h4>
                            </div>
                            <div class="col-lg-4">
                                <input ng-model="username" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 text-right">
                                <h4>Password</h4>
                            </div>
                            <div class="col-lg-4">
                                <input name="password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-lg-offset-4">
                                <label><input name="admintype" type="radio" value="super">Super Admin</label>
                                <label><input name="admintype" type="radio" value="admin" checked="checked">Admin</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-lg-offset-5">
                                <input class="btn btn-primary" name="subbtn"type="submit" value="Submit">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-lg-6">
                <form method="post" action="changePrice.php">
                    <fieldset>
                        <legend>Price Change</legend>
                        <div class="row">
                            <div class="row col-lg-offset-3">
                                <label><input name="service" type="radio" value="1040" checked="checked">Base Pckg</label>
                                <label><input name="service" type="radio" value="1010" >Rent Cert</label>
                                <label><input name="service" type="radio" value="1020" >Schedule</label>
                                <label><input name="service" type="radio" value="1000" >W-2</label>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-lg-4 text-right">
                                <h4>Price</h4>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" name="price">
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-lg-offset-5">
                                <input class="btn btn-primary" name="subbtn"type="submit" value="Submit">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        
            
        
        <div class="row">
            <p id = "validate">
                <a href="http://validator.w3.org/check/referer">Validate Me</a>
            </p>
			<p>
				<small>Website created as a project by computer science students at the University of Wisconsin Oshkosh</small>
			</p>
        </div>
	</div>
	<script src=>"js/bootstrap.min.js"></script>
    <script src="js/calender.js" type="text/javascript"></script>
</body>
</html>

