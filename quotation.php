<?php session_start(); 
require('config.php');
?>
<!DOCTYPE html>
<html>
    <head><title>EPMS</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/quotation_styles.css">
        <link rel="stylesheet" href="styles/header.css">
    </head>
    <body>
      
    <header>
<?php   include "nheader.php"; ?>
</header>


        <div class="qpagef" >
<br>
            <h2 style="text-align: center;"><b>Get Your Quotation</b></h2>

            <br><br><br>
<!----------------------------- Event type drop box ------------------------------------------------------->

<form method="POST" action="Quotationslip.php">

            <label for="etype" class="alingtext">Event Type : </label>
            <select name="etype" id="etype" style="width: 230px;position: relative;left: 25%;" >
                <option value=""></option>
                <option value="Weddings">Weddings</option>
                <option value="Cooperate">Cooperate</option>
                <option value="Family">Family</option>
                <option value="Other">Other</option>
              </select>
              <br><br>
<!----------------------------- Event date select box ------------------------------------------------------->

                <label class="alingtext">Event Date : </label>
              <input type="date" id="edate" name="edate" style="width: 225px;position: relative;left: 25.5%;"><br><br>
            
<!----------------------------- No of Images drop box ------------------------------------------------------->

              <label for="images" class="alingtext">No Of Images : </label>
              <select name="imges" id="image" style="width: 230px;position: relative;left: 22%;">
                <option value=""></option>
                <option value="Less than 500">Less than 500</option>
                <option value="More than 500">More than 500</option>
                
              </select> <br><br>

<!----------------------------- Hiring Hours drop box ------------------------------------------------------->
              
            <label for="hours" class="alingtext">Hiring Hours : </label>
            <select name="hours" id="hours" style="width: 230px;position: relative;left: 23%;" >
              <!-- <option value=""></option> -->
              <option value="Less than 5 Hours">Less than 5 Hours</option>
              <option value="More than 5 Hours">More than 5 Hours</option>
            </select> <br><br>



<!----------------------------- Location Type ------------------------------------------------------->

            <label class="alingtext">Location : </label>
              <input type="text" id="address" name="address" placeholder ="Location"  style="width: 225px;position: relative;left: 28.3%;"><br>
            <br>

<!----------------------------- Special Notes ------------------------------------------------------->

            <label class="alingtext" >Special Notes : </label>
              <textarea   name="notes" rows="10" cols="30" id="special" placeholder ="Special Notes" style="position: relative;left: 22%;" >                
                </textarea><br><br><br>

<!----------------------------- Check boxes ------------------------------------------------------->

                <input type="checkbox" name="facility[]" id="facility" value="Aerial Photo" class="alingtcheck"><label class="alingtcheckt" >Arial Photo Coverage </label>
                <br><br>
                <input type="checkbox" name="facility[]" id="facility" value="Live Streaming" class="alingtcheck"><label class="alingtcheckt">Live Streaming through Social Media </label>
                <br><br>
                <input type="checkbox" name="facility[]" id="facility" value="Post Publicity" class="alingtcheck"><label class="alingtcheckt">Post Event Publicity</label> 
                <br><br>
                <input type="checkbox" name="facility[]" id="facility" value="Promotion" class="alingtcheck"><label class="alingtcheckt">Event Promotion </label> <h6></h6> 
                <br>

<!-- ----------------------------- buttons------------------------------------------- -->

                <input class="backpay" type="reset" id="reset" value="Reset" style="position: relative;left: 56%;">
                <a href="Quotationslip.html"><input class="quoatationbtn" type="submit" id="getquotation" value="Get Quotation" style="position: relative;left:57%;"></a>

        </div>
    </form>
<!-- -----------------------------------------------------------------Footer------------------------------------------------------------------------>

        <footer>

        <?php   include "footer.php"; ?>
        
        </footer>

    </body>
</html>