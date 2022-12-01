
<!DOCTYPE html>
<html>
    <head>
        <title>EPMS</title>
        
        <link rel="stylesheet" href="styles/styles.css">     
        <link rel="stylesheet" href="styles/payment.css">
    </head>
    <body>

    <div id="payment">
        <form method="POST" action="https://sandbox.payhere.lk/pay/checkout">  
      
            <div style=" text-align: center;" >
            <h3 style="text-align: centre"><b>Reserve your Date by paying Advanced Payment </b></h3><br>

            <a style="margin-right: 64%;"><img src="src/visa.png" width="80px" height="30px"></a><br>
                        
            <input type="text" id="cardholdername" name="cardholdername" placeholder ="Cardholder's Name" class="paytextaling" style="margin-top: 3%;"><br><br>                                                            
            <input type="text" id="cardnumber" name="cardnumber" placeholder ="Card Number" class="paytextaling"><br><br>
            </div>
            <a style="margin-left:9%;">Expiry</a><br>
            <input type="date" id="expirdatecard" name="expirdatecard" placeholder ="DD/MM/YYYY" style="width: 165px;margin-left:9%;margin-top:1%;">
            <input type="text" id="cvv" name="cvv" placeholder ="CVC" style="width: 50px;height:18px;margin-left:2%"><br><br><br>
            <div style="margin-left: 62%;">
            <a href="quotation.php"><input type="button" class="backpay" id="back" value="Back" style="width: 60px;position: relative;left: 0%;margin-top: 3%;"></a>
            <input type="submit" class="paysubmit" id="paybtn" value="Pay" style="position: relative;left:0%;width: 60px;">
            </div>  
                                                
        </form>
    </div>
<?php
    include "footer.php";
?>
    </body>
</html>
