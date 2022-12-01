<?php 
session_start();

// if(isset($_POST['logout'])){
    
//     session_destroy();
    
//     header("Location: footer.php");
//     exit;
//     }



if(isset($_SESSION['name'])){
$_SESSION['name']="";

session_destroy();

header("Location: home.php");
exit;
}