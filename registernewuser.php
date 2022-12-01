<html>
  <body>

  <?php require 'config.php'; ?>

<?php

// ---------------------get last record from the database-------------------------

$sql = "SELECT * FROM registered_customer order by cust_ID desc limit 1";

$result = $conn->query($sql);

$row = $result -> fetch_assoc();

$lastid = $row['cust_ID'];
// echo 'last id '.$lastid.'<br />';
$num = str_replace("C","",$lastid);
$lastid = (int) $num ;
// echo 'converted id '.$lastid.'<br />';
// ----------------------add one for the last id--------------------------------------------
$lastid ++;
$formatted_number = str_pad($lastid, 5, '0', STR_PAD_LEFT);
$newID = "C".$formatted_number;

// echo 'new id '.$newID;

// ------------------------------------declare variables in registration form--------------------------------
$name = $_POST["name"];
$email = $_POST["mail"];
$phnumber = $_POST["number"];
$password = $_POST["password"];

// ----------------------------------encrypt the password----------------------------------------
$passworden = md5($password);

// require_once 'function.php';

// if(emptyinputvalues($name, $email, $phnumber, $password) !== false){
//   echo"<script>alert'miss values'</script>";
//   header("location:LogIn.html?error=emptyinput");
//   exit();
// }

// if(emailtaken($conn, $email) !== false){
//   header("location:LogIn.html?error=Emailtaken");
//   exit();
// }

$sql1 = "INSERT INTO registered_customer(cust_ID,cust_name) VALUES('$newID','$name')";
$sql2 = "INSERT INTO credentials_customer(cust_ID,cust_mail,cust_pass) VALUES('$newID','$email','$passworden')";
$sql3 = "INSERT INTO customer_mobile(cust_ID,Cust_pnum) VALUES('$newID','$phnumber')";



if($conn->query($sql1) === TRUE){
  if($conn->query($sql2) === TRUE){
    if($conn->query($sql3) === TRUE){
    
     
      $login_ms = "Successfully Registered!";
	header("Location: login.php?login_ms=$login_ms");
      exit();
    }else {
      echo "Error: " . $sql3 . "<br>" . $conn->error;
    }

  }else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }

}else{
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

?>
  </body
  ></html>

