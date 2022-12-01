 <?php session_start();
 ?>
<!DOCTYPE html>
<html>
    <head><title>EPMS</title>
        <link rel="stylesheet" href="styles/login_style.css">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/header.css">

        <script src="script/loginval.js"></script>


    </head>

    <body>

    <header>
<?php   include "nheader.php"; ?>
</header>
  

        <div id="loginbox">

            <!-- ------------------logo-------------------------- -->
            <div id="logoln">
                <img src="src/Pixcelence.png" width="50px" height="50px" style="margin-left: 5%;margin-top: 2%;padding-bottom: 2%;">

            </div>
            <Table>
                <tr>
                    <th>
        <!-- ---------------------------------------------register------------------------------------------------------------------------- -->
                                   
                            <div id="register">
                                <form name="register" method="POST" action="registernewuser.php" onsubmit="return validateregForm()">  
                                            <h3 style="text-align: left;margin-left:8%;margin-top:18%;font-size: large;"><b>Register</b></h3>
                        
                                                <input type="text" id="name" name="name" placeholder ="Name" class="textaling" required><br><br>
                                                <input type="email" id="mail" name="mail" placeholder ="Email" required style="width: 200px;position: absolute;top:45%;left:5.5%;border-radius: 5px;height: 20px;"><br><br>
                                                <input type="text" id="number" name="number" placeholder ="Contact no" required class="textaling"><br><br>
                                                <input type="password" id="password" name="password" placeholder ="Password" required class="textaling"><br><br>
                                                <input type="password" id="repassword" name="repassword" placeholder ="Re-type Password" required class="textaling"><br><br>
                                                <span id="errormassg"></span>
                                                <br>
                                                
                        
                                                <input class="regbtn" type="submit" id="registerbutton" value="Register" style="position: relative;left:0%;width: 140px;">
                                                
                                            </form>
                                            </div>
                        
                    </th>
    
        
                    
        <!-- ---------------------------------------------LOG IN------------------------------------------------------------------------------------------ -->
                    
                <th>
                    <td>
                    <div id="log" style="margin-left: 32%;margin-bottom: 88%;">

                        <h3 style="text-align: left;margin-left:8%;"><b>Log In</b></h3>

                    <form method="POST" action="logincon.php"> 
                    
                        <?php if(isset($_GET['error'])){?>
                            <div class="error"><?php echo $_GET['error'];?> </div>
                            <?php } ?>
                        <input type="text" id="username" name="username" placeholder ="Email" style=" margin-right: 20%;border-radius: 5px;height: 20px;"><br><br>
                        <input type="password" id="password" name="password" placeholder ="Password" class="textalinglog"><br><br>
                    
                        <input class="logbtn" type="submit" id="submit1" value="Sign In" style="position: relative;left:15%;width: 130px;"><br>

                        <!-- -------------------------changed(reset) Password btn---------------------------------------------- -->

                        <a href="reset_pass_from.php"><input class="restbtn" type="button"   value="Changed Your Password" style="position: relative;left:11%;width: 150px;"></a>
                       

                    </form>
                    </div>
                </td>

                  <td>
                      
   <?php if (isset($_GET['login_ms'])): ?>
		    <p style="position: absolute;top:70%;right:15%;font-size:18px;" class="login_ms"><?php echo $_GET['login_ms']; ?></p>
	    <?php endif;             
        
        ?>
                  </td>
                </th>
                </tr>
            </Table>
             
            </div>

        </div>
<!-- --------------------------------Footer---------------------------------------------------------------------------------------- -->
        <footer>

<?php   include "footer.php"; ?>

</footer>


    </body>
</html>