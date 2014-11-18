<!doctype html>
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
<?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "fvtaxprep"; 

        $sql = "SELECT form_name, price FROM `Forms` ORDER BY price desc;";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

        $rows = $conn->query($sql);

        if ($rows !== FALSE){
            foreach($rows as $row){     
		    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo"</tr>"; 

            }
        }
?>
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
