<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox Valley Tax Prep</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">    
</head>

<body>
	<div class="container">
        <ul class="nav nav-pills">
            <li class=""><a href="index.php">Home</a></li>
            <li class="active"><a href="services.php">Services</a></li>
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

        <div class="row">
            <div class = "col-lg-8 col-lg-offset-2 deduction">
                <table class="table table-bordered table-striped">
<?php
        $servername = "localhost";
        $username = "kohels65";
        $password = "style69!!";
        $dbname = "kohels65"; 

        $sql = "SELECT form_name, price FROM `Forms` ORDER BY price desc;";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

        $rows = $conn->query($sql);

        if ($rows !== FALSE){
            foreach($rows as $row){     
		    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$$row[1]</td>";
                    echo"</tr>"; 

            }
        }
?>
                </table> 
            </div>
        </div>
        <p id = "validate">
            <a href="http://validator.w3.org/check/referer">Validate Me</a>
        </p>
		<p>
			<small>Website created as a project by computer science students at the University of Wisconsin Oshkosh</small>
		</p>
	</div>
	<script src="js/bootstrap.min.js"></script>
  
</body>
</html>
