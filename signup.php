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
<body onload ="start_checkSignup();">

<?php
	$fname = $_POST["firstName"];
	$lname = $_POST["lastName"];
	$addr = $_POST["address"];
	$phone = $_POST["phone"];
	$cell = $_POST["cellPhone"];
	$email = $_POST["email"];
	$usern = $_POST["username"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["confirmPassword"];
	//$esu = $_POST["esignup"];
	//echo $bdate;
	//$p1 = $_POST["pass1"];
	//$p2 = $_POST["pass2"];
	//echo "<span onload=\"checkStuff('$p1', '$p1', '$bdate');\">Text</span>";
	?>
	<script type="text/javascript">
		//var thing3 = "<?php echo $_POST['bdatef']; ?>";
		var cfn = "<?php echo $_POST['firstName']; ?>";
		var cln = "<?php echo $_POST['lastName']; ?>";
		var caddr = "<?php echo $_POST['address']; ?>";
		var cphone = "<?php echo $_POST['phone']; ?>";
		var ccell = "<?php echo $_POST['cellPhone']; ?>";
		var cemail = "<?php echo $_POST['email']; ?>";
		var cun = "<?php echo $_POST['username']; ?>";
		var cpass1 = "<?php echo $_POST['password']; ?>";
		var cpass2 = "<?php echo $_POST['confirmPassword']; ?>";
		//var cesu = "<?php echo $_POST['esignup']; ?>";
		var isvalid = false;
	</script>
	<span id="valid"></span>
	<div id="hiya"></div>
	<div id="hiyo"></div>
	<?php
	
	//echo "isvalid!!!";
	
	if(isset($_SESSION['uid'])){
		//data if user is logged in
		echo "user is already logged in!";
	} else{
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
		if($notfound)
		{
			$phash = crypt($pass1, "mysalt");                                               //should update hash !!! password_hash('$pass1') 
			//echo $phash."\n";
			$db->query("INSERT INTO Login VALUES ('$usern', '$phash', 'customer');");
			$_SESSION['uid'] = crypt(time());
			//echo $_SESSION['uid'];
			echo "user : ".$usern." is logged in!";
			?>
			<br/><a class="link" href="customermain.php" id="ccmain">cmain</a><br/>
			<?php
		}
		else
		{
			echo "username : ".$usern." already exists!   ";
			?>
			<a class="link" href="signup.html">try again!</a><br/>
			<?php
		}
	}

?>


</body>
</html>
