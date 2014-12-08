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
    if(isset($_POST["service"]) && isset($_POST["price"])) {
    		$service = $_POST["service"];
   			$price = $_POST["price"];
   		}
   		
   		$sql = "UPDATE Forms set price = \"$price\" where form_no = \"$service\";"; 
   		$db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
   		$rows = $db->query($sql);

   		foreach($rows as $row){}
      echo "Price updated <br>";
      echo "<a href=\"employeemain.php\">Employee Page</a>";
?>
</body>
</html>
