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
			
<<<<<<< HEAD
        <div class="row calendar">                
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
					<tr> 
						<td width="246">
							<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
							<input name="userfile" type="file" id="userfile"> 
						</td>
						<td width="80"><input class="btn btn-success"name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
					</tr>
				</table>
			</form>
			<?php
			$db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
			$result = $db->query("SELECT id, name FROM upload");
			foreach($result as $row){
					$ran = $row['id'];
					$name = $row['name'];
					print "<a href=\"download.php?id=". $ran ."\">" . $name . "</a><br/>";
				}
			?>
        </div>          
        <div class="row calendar">
            <div class = "col-lg-2 col-lg-offset-2">
                <div id="nav"></div>
=======
        <div class="row">
            <div class = "col-lg-8 col-lg-offset-2 deduction">
                <div class="table table-bordered table-striped">  
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
				  <div>
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
                    <h1>
	             <div style="float:left; width: 160px;">
				<div id="nav"></div>
				</div>
				<div style="margin-left: 160px;">
					<div id="dp"></div>
				</div>
                    </h1>
                </div> 
>>>>>>> a600daefabe8fba0f1efa372f1b128073de8a515
            </div>
            <div class = "col-lg-8">
                <div id="dp"></div>
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
        </div>
	</div>
	<script src=>"js/bootstrap.min.js"></script>
    <script src="js/calender.js" type="text/javascript"></script>
</body>
</html>

