<?php
// Check if a file has been uploaded
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    // Make sure the file was sent without errors
        $fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES["file"]["tmp_name"];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
 	   $fileName = addslashes($fileName);
	}
       $db = new PDO("mysql:dbname=vanlab18;host=localhost","vanlab18","Mountain123");

 
        // Create the SQL query
        $db->query("INSERT INTO upload (name, type, size, content) VALUES ('$fileName', '$tmpName', '$fileSize', '$fileType')");
}
?>
 
