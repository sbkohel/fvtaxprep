<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
  if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //if( verify password ) { $_SESSION["username"] = $username;
      //if(customer){ redirect("customermain.php", "");}
      //if(employee){ redirect("employeemain.php", "");} }
  }else{
    redirect("login.html","hi");
  }
?>
    
  
  
  
  
</body>
</html>
