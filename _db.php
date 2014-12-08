<?php

$db_exists = file_exists("fvtaxprep");

$servername = "localhost";
$username = "kohels65";
$password = "style69!!";
$dbname = "kohels65";


$db = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if (!$db_exists) {
    //create the database
    $db->exec("CREATE TABLE IF NOT EXISTS events (
                        id INTEGER PRIMARY KEY, 
                        name TEXT, 
                        start DATETIME, 
                        end DATETIME,
                        resource VARCHAR(30))");

    $messages = array(
                    array('name' => 'Event 1',
                        'start' => '2014-12-09T00:00:00',
                        'end' => '2014-12-09T10:00:00',
                        'resource' => 'B')
                );
}
    $insert = "INSERT INTO events (name, start, end, resource) VALUES (:name, :start, :end, :resource)";
    $stmt = $db->prepare($insert);
 
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':start', $start);
    $stmt->bindParam(':end', $end);
    $stmt->bindParam(':resource', $resource);
 
    foreach ($messages as $m) {
      $name = $m['name'];
      $start = $m['start'];
      $end = $m['end'];
      $resource = $m['resource'];
      $stmt->execute();
    }
    


?>
