<?php
require 'config.php'; 

if (isset($_POST["submit"])) {

    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $Add = $_POST["Add"];
    $Mail = $_POST["Mail"];
    $DoB = $_POST["DoB"];
    $Pno = $_POST["Pno"];
    $Pwd = $_POST["Pwd"];
    $Experience = $_POST["Experience"];
    $Description = $_POST["Description"];
    $NoEvents = $_POST["NoEvents"];
    $Model = $_POST["Model"];
    $Arial = $_POST["Arial"];

   require 'config.php'; 
   header("Location:application.php?signup=success");

} else {
    header("Location:application.php?signup=success");
    exit();
}

$sql = "INSERT INTO applicant (user_FName, user_LName, user_Add, user_Mail, user_DoB, user_Pno, user_Pwd, user_Experience, user_Description, user_NoEvents, user_Model, user_Arial) VALUES ('$FName','$LName','$Add','$Mail','$DoB','$Pno','$Pwd','$Experience','$Description','$NoEvents','$Model','$Arial');";
mysqli_query($conn, $sql);