<!DOCTYPE html>
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
	
		
<?php
		if(isset($_POST["username"]) && isset($_POST["password"])) {
    		$username = $_POST["username"];
   			$password = $_POST["password"];
   			$role = $_POST["admintype"];
   		}
   		
   		$sql = "SELECT COUNT(*) FROM LabFive WHERE username = \"$username2\";";
   		$db = new PDO("mysql:dbname=kohels65;host=localhost","root","root");
   		$rows = $db->query($sql);

   		foreach($rows as $row){
            if($row[0] > 0){
              echo "Username already exists <a href=\"employeemain.php\">Please try another username.</a>";
            }
            else{
            	$sql = "INSERT INTO Login (username,password,role) VALUES (\"$username\",\"$password\",\"$role\")";
		   		$db = new PDO("mysql:dbname=kohels65;host=localhost","root","root");
				$result = $db->exec($sql);
				echo "Username $username created <br>";
        		echo "<a href=\"employee.php\">Log In</a>";
            }
        }

?>
</body>
</html>
