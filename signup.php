<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fox Valley Tax Prep</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="check.js" type="text/javascript"></script>
</head>
<body onload ="start_checkSignup();">

<?php
	session_start();
	$fname = $_POST["firstName"];
	$lname = $_POST["lastName"];
	$addr = $_POST["address"];
	$phone = $_POST["phone"];
	$cell = $_POST["cellPhone"];
	$email = $_POST["email"];
	$usern = $_POST["username"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["confirmPassword"];
	echo "$_POST['esignup']";
	/*
	if(isset($_SESSION['uid'])){
		echo "user is already logged in!";
	?>
		<br/><a class="link" href="customermain.php" id="gohere">cmain</a><br/>
	<?php
	} 
	else{
		//echo "query...";
		$db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
		$rows = $db->query("SELECT DISTINCT username, password FROM Login WHERE username='$usern';");
		$notfound = true;
		foreach($rows as $row)
		{	
			$notfound = false;
			//echo "$row[0]";
			break;
		}
		//echo $notfound;
		if($notfound && ( $pass1 == $pass2 ) )
		{
			$phash = crypt($pass1, "mysalt");          //should update hash !!! password_hash('$pass1') 

			$db->query("INSERT INTO Login VALUES ('$usern', '$phash', 'customer');");
			$db->query("INSERT INTO Customers VALUES ('$user', '$fname', '$lname', '$addr', '$phone', '$cell', '$email');");
			$_SESSION['uid'] = $usern;
			echo "user : ".$usern." is logged in!";
			?>
			<br/><a class="link" href="customermain.php" id="gohere">cmain</a><br/>
			<?php
		}
		else
		{
			echo "username : ".$usern." already exists!   ";
			?>
			<br/><a class="link" href="signup.html" id="gohere">try again!</a><br/>
			<?php
		}
	}
*/
?>


</body>
</html>
