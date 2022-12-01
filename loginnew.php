<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "isdm(epms)";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

?>

<?php

$query = "SELECT * FROM registered_customer order by cust_ID desc limit 1";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row('cust_ID');

if($lastid == " "){
  $custid = "c11111";

}else {
  $custid = substr($lastid,5);
  $custid = intval($custid);
  $custid = "c11111".($custid+1);

}

?>




<!DOCTYPE html>
<html>
    <head><title>EPMS</title>
        <link rel="stylesheet" href="styles/login_style.css">
        <link rel="stylesheet" href="styles/styles.css">
    </head>

    <body>


        <div id="loginbox">

            <!-- ------------------logo-------------------------- -->
            <div id="logoln">
                <img src="src/Pixcelence.png" width="50px" height="50px" style="margin-left: 45%;margin-top: 2%;padding-bottom: 2%;">

            </div>
            <Table>
                <tr>
                    <th>
        <!-- ---------------------------------------------register------------------------------------------------------------------------- -->
                                   
                            <div id="register">
                                <form method="POST" action="registernewuser.php">  
                                                       <h3 style="text-align: left;margin-left:8%;"><b>Register</b></h3>
                        
                                                <input type="text" id="name" name="name" placeholder ="Name" class="textaling" value="<?php echo $custid; ?>" ><br><br>
                                                <input type="email" id="mail" name="mail" placeholder ="Email" style="width: 200px;margin-right: 80%;"><br><br>
                                                <input type="text" id="number" name="number" placeholder ="Contact no" class="textaling"><br><br>
                                                <input type="password" id="password" name="password" placeholder ="Password" class="textaling"><br><br>
                                                <input type="password" id="repassword" name="repassword" placeholder ="Re-type Password" class="textaling"><br><br><br>
                        
                                                <input type="submit" id="registerbutton" value="Register" style="position: relative;left:0%;width: 140px;">
                                                <!-- <div id="or">
                                                    <img src="src/or.png" width="20px" height="20px">
                                        
                                                </div> -->
                                            </form>
                                            </div>
                        
                    </th>
        <!-----------------------------vertical line----------------------------------->

        
                    <!-- <div class="vl"></div> -->
                    <!-- <hr class="h1">
                    <div class="v2"></div> -->
        <!-- ---------------------------------------------LOG IN------------------------------------------------------------------------------------------ -->
                    
                <th>
                    <td>
                    <div id="log" style="margin-left: 32%;margin-bottom: 88%;">

                        <h3 style="text-align: left;margin-left:8%;"><b>Log In</b></h3>
                    
                        <input type="email" id="mail" name="mail" placeholder ="Email" style=" margin-right: 20%;"><br><br>
                        <input type="password" id="password" name="password" placeholder ="Password" class="textalinglog"><br><br>
                    
                        <input type="submit" id="sign" value="Sign In" style="position: relative;left:15%;width: 130px;">
                    
                    </div>
                </td>
<!-- -------------------------------------------------------------social log in ------------------------------------------------------------------------------------- -->
                   <td>
                    <div id="social" style="position: absolute;top: 58%;right: 13%;">
                        <h3 style="text-align: center;"><b>Sign in with your<br> social network</b></h3>

                        <input type="button" id="signgoogle" value="Log in with Google" style="position: relative;center:35%;width: 150px;"><br>
                        <input type="button" id="signfacebook" value="Log in with Facebook" style="position: relative;center:35%;width: 150px;margin-top: 5%;">

                    </div>
                </td>
                </th>
                </tr>
            </Table>
             
            </div>

        </div>


             <!-- Add icon library -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

             <footer>
                 <hr>
                 <table>
                     <th>
                     <div id="icontext">
     
                         <img src="src/Pixcelence.png" width="50px" height="50px">
             
                         <h4>The number one Event photography <br> service provider in Sri Lanka with <br>years of experience delivering <br>unparalleled service to a <br>larage array of customers.</h4>
                         
                     </div>
                     </th>
     
                     <th>
                         <div id="mail">
                             <h6 class="textb">klixeventphotography@gmail.com</h6>
                             <h6 class="textb"> +94 112451248</h6>
                             <h6 class="textb">+94 774125142</h6>
                 
                             <div class="textb">
                             <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                             <a href="https://twitter.com/" class="fa fa-twitter"></a>
                             <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                             <a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>
                             <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                              </div>
                             </div>
                     </th>
                     <th>
                         <div class="map">
     
     
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80385596924!2d79.82118597889533!3d6.921922576187983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2z4Laa4Lec4LeF4La5!5e0!3m2!1ssi!2slk!4v1632566097947!5m2!1ssi!2slk" width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
                         </div>
                     </th>
                 </table>
                 <hr>
                 <table>
                     <th><div class="copy">Copyrights</div></th>
                     <TH><nav>
     
                         <div id="bottom">
                         <ul>
                             <li><a href="#home">Home</a></li>
                             <li><a href="#gallery">Gallery</a></li>
                             <li><a href="#services">Services</a></li>
                             <li><a href="#book">Book now</a></li>
                             <li><a href="#work">Work with us</a></li>
                             <li><a href="#about">About us</a></li>
                             <li><a href="#Contact">Contact</a></li>
                         </ul>
                     </div>
                             
                         </nav></TH>
                         
                         
                 </table>
                 <hr>
             </footer>

    </body>
</html>