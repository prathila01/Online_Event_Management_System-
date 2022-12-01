<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Employee Dashboard</title>
        <link rel="stylesheet" href="styles/emp.css" type="text/css">
        <link rel="stylesheet" href="styles/header.css"> 
        <link rel="stylesheet" href="styles/footer.css">
    </head>

    <body>

<!-- ---------------------header------------------------------------ -->   
        
<!-- header beginning -->
	<div id="header" >
	
	<table id="nav_table">
	<tr>
	
	<td rowspan=2>
	<div id="logo" ><h1 style="text-align:center; font-size:40px; margin:0;">KLIX</h1> </div>
	</td>
	
	<td>
	<div class="log_in" style="float:right;">

	<ul  class="nav_main">
	<?php 
		if(isset($_SESSION['name'])){
			$name = $_SESSION['name'];
			echo("<li>	 <img src='src/login.png' style='width:25px; height:25px;'> </li>");
			echo ("<li style = 'padding-top:3%;'>".$name."</li>");
			echo ("<li><a href='logout.php' style='padding-left:5%;background-color:#cd5c5c;' >LogOut</a></li>");
			
		}else {
			echo ("<img src='src/login.png' style='width:25px; height:25px; padding-bottom:5px;'> <a href='login.php'>Login</a> | <a href='login.php'>Sign Up</a>");
		}

		?>
	</ul>
	</div>
	</td>
	</tr>
	
	<tr>
	<td>
	
	
	</td>
	</tr>
	</table>

</div>
	<!-- header ending -->
   <hr>


    <div class="emp_calendar">

    <iframe class="emp_calendar" src="https://calendar.google.com/calendar/embed?src=8k6k3nl5bhpq4fq3i3ttpi36ps%40group.calendar.google.com&ctz=Asia%2FColombo" style="border: 0; border-radius:10px;" width="600" height="400" frameborder="0" scrolling="no"></iframe>

    </div>


    <div class="emp_msg"></div>

   

    <div class="file_console">

    <?php include'config.php' ?>

        <!-- view -->
        <input type="radio" id="view" name="tabs" checked="checked">
        <label for="view">Work File directory</label>
        <div class="content"> 
                  
            <?php 
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $result = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($images = mysqli_fetch_assoc($result)) {  ?>
                
                <div class="view">
                    <img src="emp_uploads/<?=$images['image_url']?>">
                </div>
                    
            <?php } }?>
            
        </div>



        <!-- upload -->
        <input type="radio" id="upload" name="tabs">
        <label for="upload">upload</label>
        <div class="content">
        <form action="emp_upload.php" method="POST" enctype = "multipart/form-data">

           <input type="file" name="emp_img" class="btn">
           <input type="submit" name="submit" value="Upload" class="btn">

        </foam> 

        </div>
        
        <div> 
        <?php if (isset($_GET['error'])): ?>
		    <p class="err_m"><?php echo $_GET['error']; ?></p>
	    <?php endif;
        $conn->close(); 
        
        
        ?>
        </div>


       

    </div>





    <!-- -----------------------footer----------------------------------------- -->   


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
                    <div id="mail" style="margin-left: 50%;">
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
                    <div class="map" style="margin-left: 60%;">


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80385596924!2d79.82118597889533!3d6.921922576187983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2z4Laa4Lec4LeF4La5!5e0!3m2!1ssi!2slk!4v1632566097947!5m2!1ssi!2slk" width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </th>
            </table>
            <hr>
            <table>
                <th><div class="copy">(MLB_03.02_08)</div></th>
                <TH><nav class="f_nave">

                   
                        
                    </nav></TH>
                    
                    
            </table>
            <hr>
        </footer>
   </body>    




</html>