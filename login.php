<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Website</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="check.js" type="text/javascript"></script>
</head>
<body onload ="start_checkLogin();">

	<?php
	session_start();
	$usern = $_POST["username"];
	$pass1 = $_POST["password"];
	?>
	<?php
	
	//echo "isvalid!!!";
	
	if(isset($_SESSION['uid'])){
	echo "user is already logged in!";
	?>
		<br/><a class="link" href="logout.php" id="gohere">logout</a><br/>
	<?php
	} 
	else{
		//echo "query...";
		$db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
		$rows = $db->query("SELECT DISTINCT username, password FROM Login WHERE username='$usern';");
		$found = false;
		foreach($rows as $row)
		{	
			$found = true;
			$pcheck = $row[1];
			$status = $row[2];
			break;
		}
		$phash = crypt($pass1, "mysalt"); //should update hash !!! password_hash('$pass1') 

		if($found and ($phash == $pcheck) )
		{
			$sessionid = crypt(time());
			//$db->query("INSERT INTO Login VALUES ('$usern', '$phash', 'customer');");
			$_SESSION['uid'] = $usern;
			//$_SESSION['sid'] = $sessionid;
			//echo $_SESSION['uid'];
			echo "user : ".$usern." is logged in!";
			if($status == "customer")
			{
			?>
			<br/><a class="link" href="customermain.php" id="gohere">cmain</a><br/>
			<?php
			}
			else
			{
			?>
			<br/><a class="link" href="employeemain.php" id="gohere">cmain</a><br/>
			<?php
			}
		}
		else
		{
			echo "username : ".$usern." already exists!   ";
			?>
			<br/><a class="link" href="login0.php" id="gohere">try again!</a><br/>
			<?php
		}
	}

?>


</body>
</html>
