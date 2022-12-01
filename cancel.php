<?php
include_once'config.php';		
?>

<?php

$r_ID= $_GET['id'];

$query=" SELECT reserv_date FROM reservation_details WHERE reserv_ID='$r_ID' ";
$result = $conn->query($query);

$row=$result->fetch_assoc();

$today=strtotime(date("Y-m-d"));

if((strtotime($row['reserv_date'])-$today)/60/60/24 >3){
	
	$delete= "DELETE FROM reservation_details WHERE reserv_ID='$r_ID' ";
	$data=$conn->query($delete);
	
	$can_m = "Successfully canceled your booking....Half of your payment will be refunded.  Looking forward to meet you again. Thank you!";
	header("Location: user_panel.php?feedback=$can_m");

	
	
}
else{
	$can_m = "Cannot cancel your reservation through the platform. Please contact us. Thank you!";
	header("Location: user_panel.php?feedback=$can_m");;

}




?>