<?php
require 'config.php';
session_start();

$etype = $_SESSION['etype'];
$edate = $_SESSION['edate'];
$eaddress = $_SESSION['eaddress'] ;
$enote = $_SESSION['enote'];
$ehours = $_SESSION['ehours'];
$advpay = $_SESSION['pay'];

// --------------------------Get last record of reserve details--------------------------------------

$sql = "SELECT * FROM reservation_details order by reserv_ID desc limit 1";

$result = $conn->query($sql);

$row = $result -> fetch_assoc();

$lastid = $row['reserv_ID'];
// echo 'last id '.$lastid.'<br />';

$num = str_replace("R","",$lastid);
$lastid = (int) $num ;
// echo 'converted id '.$lastid.'<br />';
// ----------------------add one for the last id--------------------------------------------
$lastid ++;
$formatted_number = str_pad($lastid, 7, '0', STR_PAD_LEFT);
$reservenewID = "R".$formatted_number;

//  echo 'reserve id '.$reservenewID.'<br>';



 // ---------------------get last record of payment details-------------------------

$sql1 = "SELECT * FROM payment order by pay_ID desc limit 1";

$result1 = $conn->query($sql1);

$row1 = $result1 -> fetch_assoc();

$lastid1 = $row1['pay_ID'];
// echo 'last id '.$lastid.'<br />';

$num1 = str_replace("P","",$lastid1);
$lastid1 = (int) $num1 ;
// echo 'converted id '.$lastid.'<br />';
// ----------------------add one for the last id--------------------------------------------
$lastid1 ++;
$formatted_number1 = str_pad($lastid1, 4, '0', STR_PAD_LEFT);
$paynewID = "P".$formatted_number1;

//  echo 'pay id '.$paynewID.'<br>';


 // ---------------------get relevent cust id -------------------------

 $id = $_SESSION['name'];

//  $id ='samiry@gmail.com';

$sql2 = "SELECT cust_ID FROM credentials_customer WHERE cust_mail='$id' ";
$result2 = $conn->query($sql2);
$row2 = $result2 -> fetch_assoc();
$releventid = $row2['cust_ID'];

//  echo 'pay id '.$releventid;

// ------------------------

$sql3 = "INSERT INTO reservation_details(reserv_ID,cust_ID,reserv_type,reserv_date,reserv_hours,reserv_location,reserv_notes) VALUES('$reservenewID','$releventid','$etype','$edate','$ehours','$eaddress','$enote')";
$sql4 = "INSERT INTO payment(pay_ID,reserv_ID,cust_ID,pay_amount) VALUES('$paynewID','$reservenewID','$releventid','$advpay')";
$sql5 = "INSERT INTO pay_dates(pay_date,reserv_ID,pay_ID) VALUES('$edate','$reservenewID','$paynewID')";

if($conn->query($sql3) === TRUE){
    if($conn->query($sql4) === TRUE){
        if($conn->query($sql5) === TRUE){
            header("Location: user_panel.php");
            echo "<script>alert('New record created successfully')</script>";
            exit();
        }else {
            echo "Error: " . $sql3 . "<br>" . $conn->error;
        }

    }else {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
    
  }else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
  }

?>