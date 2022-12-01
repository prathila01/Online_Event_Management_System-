<?php session_start();
require('config.php');

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

?>
<html>
    <head><title>EPMS</title>
        
        <link rel="stylesheet" href="styles/styles.css">     
        <link rel="stylesheet" href="styles/payment.css">
        <link rel="stylesheet" href="styles/header.css">
        </head>
<body>

<!-- -----------------------------Header--------------------------------- -->
<header>
<?php   include "nheader.php"; ?>
</header>

           <!-- -------------------https://support.payhere.lk/api-&-mobile-sdk/payhere-checkout---------------------------------- -->
           <div id="payment">
<form name="paymentn" method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1218805">    
    <input type="hidden" name="return_url" value="http://localhost/project/paymentgatewaydata.php">
    <input type="hidden" name="cancel_url" value="quotation.php">
    <input type="hidden" name="notify_url" value=""> 

    <div style="text-align: center;">
      <h3 style="text-align: centre"><b>Reserve your Date by paying Advanced Payment </b></h3><br>

    <a style="text-align: center;"><b>---------------Customer Details---------------</b></a><br><br>
    </div>
    <a style="margin-left: 1%;">First Name : </a><input  type="text" class="textbox" style="width:160px;" name="first_name" required>
    <a style="margin-left: 1%;">Last Name : </a><input type="text" class="textbox" style="width:220px;" name="last_name" required><br>

    <?php 
		    if(isset($_SESSION['eaddress'])){
                $eaddress = $_SESSION['eaddress'] ;
                
				echo ("<a style='margin-left: 1%;'>Address : </a><input type='text' class='textbox' style='width:280px;' name='address' value='$eaddress'>");
                
            }else {
                
                header("Location: paymentgateway.php?error=Address Failed");
              }

	        ?>

    
    <a style="margin-left: 1%;">City : </a><input type="text" class="textbox" style="width:100px;" name="city" required><br><br>
    <?php 
		    if(isset($_SESSION['name'])){
                 $id = $_SESSION['name'] ;
                
				echo ("<a style='margin-left: 1%;'>Email : </a><input type='text'  style='width:200px;' name='email' value='$id'>");
                
            }else {
                header("Location: paymentgateway.php?error=User Failed");
                
              }

	        ?>
    <br>
    <a style="margin-left: 1%;">Phone Number : </a><input type="text" style="width:148px;" class="textbox" name="phone" required><br><br>
    
    <input type="hidden" name="country" value="Sri Lanka"><br>
    
    <div style="text-align: center;"><b>---------------Event Details-----------------</b></div>
    <br><br>
    

    <?php 
		    if(isset($_SESSION['etype'])){
              $type = $_SESSION['etype'] ;
                
              echo("<a style='margin-left: 1%;'>Event ID :   </a><input type='text' name='order_id' value='$reservenewID'>");
				echo ("<a style = 'margin-left:2%'>Event Type :   </a><input type='text' name='items'  value='$type'>");
                
            }else {
                
                header("Location: paymentgateway.php?error=Event Type Error");
              }

	        ?>

    <br><br>
    <a style="margin-left: 1%;">Amount : </a><input type="text" name="currency" value="LKR">
    <?php 
		    if(isset($_SESSION['pay'])){
                $pay = $_SESSION['pay'];
                
				echo ("<input type='text' style='margin-left: 1%;' class='amounttab' name='amount' value='$pay.00'>");
                
            }else {
                header("Location: paymentgateway.php?error=Amount Error");
              }

	        ?>
    
<br><br>

<?php if(isset($_GET['error'])){?>
                            <div class="error"><?php echo $_GET['error'];?></div>
                            <?php } ?>

    <input type="submit" class="paysubbbtn" style="margin-left:80%;" value="Pay Now">   
    
</form> 
    </div>

    <!-- -------------------------Footer------------------------------------------------------------------------------------------------------- -->
    
<footer>

<?php   include "footer.php"; ?>

</footer>

</body>
</html>