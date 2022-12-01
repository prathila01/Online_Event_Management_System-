<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <Head><title>EPMS</title>
        <link rel="stylesheet" href="styles/styles.css">
    </Head>
    <body>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php 
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                echo $name;
        ?>
        <form method="POST" action="logout.php">
        <input type="submit" id="logout"  value="logout" style="position: relative;left: 56%;">;
                <!-- <span class="logout" onclick="logout.php">logOut</span> -->
        </form>
        <?php 
            }else {
                echo "sorry";
            }
        ?>

        <!-- <div >
            
            <input href="logout.php" type="button" id="logout" value="Log out" style="position: relative;left:15%;width: 130px;">
        </div> -->


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