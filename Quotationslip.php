<?php session_start();
require 'config.php'; ?>

<?php



$etype = $_POST["etype"];
$edate = $_POST["edate"];
$hours = $_POST["hours"];
$address = $_POST["address"];
$notes = $_POST["notes"];



// assign data for session
$_SESSION['etype'] =  $_POST["etype"];
$_SESSION['edate'] =  $_POST["edate"];
$_SESSION['eaddress'] =  $_POST["address"];
$_SESSION['enote'] =  $_POST["notes"];
$_SESSION['ehours'] =  $_POST["hours"];


switch ($etype) {
    case "Weddings":
    
    // ----------get rate from database---------------------------------
    $sql = "SELECT * FROM serve_packages WHERE reserv_type = 'weddings'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    $rate = $row['hourly_rate'];

     // ---------------------------Calculate full payment by multiplying hourly rate-----------------------------
     if($hours == 'Less than 5 Hours'){
        $phtographer = 4;
        $pay = $rate * 4;
       
     }else if($hours == 'More than 5 Hours'){
        $phtographer = 4;
        $pay = $rate * 6;
       
            }

      break;

    //   -------------------------------------------------------Cooperate--------------------------------------------------------------------
    case "Cooperate":
        $sql = "SELECT * FROM serve_packages WHERE reserv_type = 'cooperate'";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();
        $rate = $row['hourly_rate'];

        if($hours == 'Less than 5 Hours'){
                $phtographer = 2;
                $pay = $rate * 4;
        }else if($hours == 'More than 5 Hours'){
            $phtographer = 3;
            $pay = $rate * 6;
             }
    break;

// --------------------------------------------------------------Family-------------------------------------------------------
    case "Family":

        $sql = "SELECT * FROM serve_packages WHERE reserv_type = 'family'";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();
        $rate = $row['hourly_rate'];

        if($hours == 'Less than 5 Hours'){
            $pay = $rate * 4;
            $phtographer = 1;

            }else if($hours == 'More than 5 Hours'){

                $pay = $rate * 6;
                $phtographer = 1;
            }

            
    break;
// ---------------------------------------------------------------Other-------------------------------------------------------------------
    case "Other":

        $sql = "SELECT * FROM serve_packages WHERE reserv_type = 'other'";
                $result = $conn->query($sql);
                $row = $result -> fetch_assoc();
                $rate = $row['hourly_rate'];

        if($hours == 'Less than 5 Hours'){
            $pay = $rate * 4;
             $phtographer = 2;

        }else if($hours == 'More than 5 Hours'){

            $pay = $rate * 6;
             $phtographer = 3;

             }

    break;

    default:
        $pay = 0;
        $phtographer = 0;
    
    }

    // ---------advanced payment calulation----------------------------

    $advpay = $pay * 0.25;
    $_SESSION['pay'] =  $advpay;
   

?>


<!DOCTYPE html>
<html>

    <head>
        <title>EPMS</title>

        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/quotation_styles.css">
        <link rel="stylesheet" href="styles/header.css">

    </head>

    <body>
<!-- -----------------------------Header--------------------------------- -->
<header>
<?php   include "nheader.php"; ?>
</header>

        <div class="qpageslip">

            <div id="icontextq">
            <img src="src/Pixcelence.png" width="50px" height="50px">
            </div><br><br>
            <h2 style="text-align: center;font-size: 25px;"><b>Quotation</b></h2>

            <br><br><br>
<!----------------------------- Event type  ------------------------------------------------------->

            <label for="Qetype" class="alingtext">Event Type : <b><?php echo $etype; ?></b></label>
            
              <br><br>
<!----------------------------- Event date  ------------------------------------------------------->

                <label class="alingtext">Event Date : <b><?php echo $edate ?></b></label>
             <br><br>
            
<!----------------------------- No of Images ------------------------------------------------------->

              <!-- <label for="Qimages" class="alingtext">No Of Images : <b><?php echo $image ?></b></label>
             <br><br> -->

<!----------------------------- Hiring Hours ------------------------------------------------------->

            <label for="Qhours" class="alingtext">Hiring Hours : <b><?php echo $hours ?></b></label>
             <br><br>

<!----------------------------- No of photographers ------------------------------------------------------->

<label for="Qphotographers" class="alingtext">No of Photographers : <b><?php echo $phtographer.' Photographers' ?></b></label>
<br><br>


<!----------------------------- Location ------------------------------------------------------->

<label for="Location" class="alingtext">Location : <b><?php echo $address ?></b></label>
             <br>
            <br>

<!----------------------------- Other Facilities ------------------------------------------------------->

<label for="facility" class="alingtext">Other Facilities : <b><?php if(!empty($_POST['facility'])) {  
                                                                    foreach($_POST['facility'] as $value){
                                                                        echo $value.',';
                                                                    }
                                                                 };
 ?></b></label>
<br>
<br>

<!----------------------------- Special Notes ------------------------------------------------------->

<label for="specialnotes" class="alingtext">Special Notes : <b><?php echo $notes ?></b></label>
                          
                </textarea><br><br><br><br>

<!----------------------------- full payment ------------------------------------------------------->

<label for="fullpayment" class="alingtext">Full Payment : <b><?php echo 'Rs.'.$pay.'.00' ?></b></label>
                          
</textarea><br><br>

<!----------------------------- advanced payment ------------------------------------------------------->

<label for="Apayemnt" class="alingtext">Advanced Payment : <b><c class="payment"><?php echo 'Rs.'.$advpay.'.00' ?></c></b></label>
                          
</textarea><br><br><br><br><br>

<!-- ----------------------------- buttons------------------------------------------- -->

<a href="quotation.php"><input type="button" class="qslipbtnback" id="back" value="Back" style="position: relative;left: 56%;"></a>
<a href="paymentgateway.php"><input type="submit" class="qslipsubmitbtn" id="booknow" value="Book Now" style="position: relative;left:57%;"></a>

        </div>



<!-- -------------------------Footer------------------------------------------------------------------------------------------------------- -->
    
<footer>

<?php   include "footer.php"; ?>

</footer>

    </body>
</html>