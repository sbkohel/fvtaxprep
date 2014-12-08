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
<body onload="logout();">
<?php
	session_start();
	session_destroy();
?>
<a class="link" id="leave" href="index.html">Main</a>
</body>
</html>
