<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
$id    = $_GET['id'];
$db = new PDO("mysql:dbname=vanlab18;host=localhost","vanlab18","Mountain123");
$result = $db->query("SELECT name, type, size, content FROM upload WHERE id = '$id'");
foreach($result as $row){
      // Print headers
     header("Content-Type: ". $row['type']);
     header("Content-Length: ". $row['size']);
     header("Content-Disposition: attachment; filename=". $row['name']);
 
     // Print data
     echo $row['content'];	
	}
}

?>
