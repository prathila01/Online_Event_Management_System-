<?php session_start(); 
require('config.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>EPMS</title>
        
        <link rel="stylesheet" href="styles/styles.css">     
        <link rel="stylesheet" href="styles/resetpass.css">
        <link rel="stylesheet" href="styles/header.css">
    </head>
    <body>

    <header>
<?php   include "nheader.php"; ?>
</header>


    <div id="resetpass">
        <form method="POST" action="resetpassword.php">  
            <h3 style="text-align: centre"><b>Reset Your Password</b></h3>
                        
            <input type="text" id="username" name="username" placeholder ="Username" class="textaling" ><br><br>                                                            
            <input type="oldpassword" id="oldpassword" name="oldpassword" placeholder ="Current Password" class="textaling"><br><br>
            <input type="newpassword" id="newrepassword" name="newrepassword" placeholder ="New Password" class="textaling"><br><br><br>
                        
            <input type="submit" class="passrebtn" id="resetpa" value="Reset Password" style="position: relative;left:0%;width: 140px;"><br>
            <a href="login.php"><input type="button" class="qslipbackbtn" id="back" value="Back" style="position: relative;left: 0%;margin-top: 3%;"></a>
                                                
        </form>
    </div>
<?php
    include "footer.php";
?>
    </body>
</html>
