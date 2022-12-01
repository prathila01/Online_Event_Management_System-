<?php

require 'config.php'; 

$FName = $_POST["FName"]; 
$LName = $_POST["LName"];
$Phone = $_POST["Phone"];
$eMail = $_POST["eMail"];
$Des = $_POST["Des"];

$sql = "INSERT INTO feedback(user_FName,user_LName,user_Phone,user_eMail,user_Des) VALUES ('$FName','$LName','$Phone','$eMail','$Des');";

if($conn->query($sql) === TRUE){
    
          header("Location: contactus.php");        
          exit();
  
}else {
  
          echo "Error: " . $sql . "<br>" . $conn->error;
  
      }

?>



