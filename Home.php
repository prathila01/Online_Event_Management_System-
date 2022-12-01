
<?php session_start(); 
require('config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>EPMS</title>
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="styles/calendar.css" type="text/css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	
		
  </head>
  <body>

  <header>
	
	<?php   include "nheader.php"; ?>
	
</header>

	<!-- content beginning -->
    <div id="content">
	
	    <!-- Banner -->
		<div class="main_banner">
			<img src="src/banner1.jpg" class="cover">
			<div class="banner_content">
			<a href="checkloginqoutation.php" class="btn_book">Book Now</a>
			</div>
		</div>
	    <!-- Banner End -->
	
		

		<?php

		include 'config.php';
		$events_num='SELECT reserv_ID FROM Reservation_Details';
		$result_events = $conn->query($events_num);
		$event_count= mysqli_num_rows($result_events);


		$clients_num='SELECT cust_ID FROM registered_customer';
		$result_clients = $conn->query($clients_num);
		$client_count= mysqli_num_rows($result_clients);

		$emp_num='SELECT emp_ID FROM employee';
		$result_emp = $conn->query($emp_num);
		$emp_count= mysqli_num_rows($result_emp);

		$conn->close();

		?>

		
		<div >
			<table id="main_info_displayer">
				<tr style="width:100px;">
					<td class="info_displayer_list" id="events_info"><?php printf("%d",$event_count)?><span class="small_wrd">+<br>events</span></td>
					<td class="info_displayer_list" id="clients_info"><?php printf("%d",$client_count)?><span class="small_wrd">+<br>clients</span></td>
					<td class="info_displayer_list" id="snaps_info"><?php printf("%d",$event_count*50)?><span class="small_wrd">+<br>snaps</span></td>
					<td class="info_displayer_list" id="photographer_info"><?php printf("%d",$emp_count)?><span class="small_wrd">+<br>photographers</span></td>
				</tr>
			</table>
		</div>
		
		<div class="main_demo">

			<h1 style="text-align:center; font-size:50px;">Our latest Work</h1>
			<div class="demo_gallery">
				<div class="pic wedding"><img src="src/wedding2.jpg"></div>
				<div class="pic cooperate"><img src="src/cooperate2.jpg"></div>
				<div class="pic family"><img src="src/family2.jpg"></div>
				<div class="pic other"><img src="src/other.jpg"></div>
			</div>

		</div>
		
		<div class="bottom_main" >
			<div class="calendar">
				<div class="calendar-header">
					<span class="month-picker" id="month-picker">February</span>
					<div class="year-picker">
						<span class="year-change" id="prev-year">
							<pre>&lt;</pre>
						</span>
						<span id="year">2021</span>
						<span class="year-change" id="next-year">
							<pre>></pre>
						</span>
					</div>
				</div>
				<div class="calendar-body">
					<div class="calendar-week-day">
						<div>Sun</div>
						<div>Mon</div>
						<div>Tue</div>
						<div>Wed</div>
						<div>Thu</div>
						<div>Fri</div>
						<div>Sat</div>
					</div>
					<div class="calendar-days"></div>
				</div>
			
				<div class="month-list"></div>
			</div>
		
			<script src="script/calendar.js"></script>	 
		
		   
		
		   <div class="book_bottm" >
			   <h1>Make your events unfogettable with us</h1>
			   <a href="checkloginqoutation.php" class="btn_book_bottom" >Book Now</a>




		   </div>
	    </div>
		
		


	</div>
	<!-- content ending -->

	

    

<!-- footer -->        
        
   
    
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   


        <footer>
            <hr>
            <table class="ftb">
                <th>
                <div id="icontext">

                    <img src="src/Pixcelence.png" width="50px" height="50px">
        
                    <h4>The number one Event photography <br> service provider in Sri Lanka with <br>years of experience delivering <br>unparalleled service to a <br>larage array of customers.</h4>
                    
                </div>
                </th>

                <th>
                    <div id="mail" style="position: relative;left:90%;top:20%">
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
                    <div class="fmap" style="margin-left: 22%;">


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80385596924!2d79.82118597889533!3d6.921922576187983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2z4Laa4Lec4LeF4La5!5e0!3m2!1ssi!2slk!4v1632566097947!5m2!1ssi!2slk" width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </th>
            </table>
            <hr>
            <table>
                <th><div class="copy">(MLB_03.02_08)</div></th>
                <TH><nav class="f_nave">

                    <div id="bottom">
                    <ul class="f_ul">
                        <li class="f_li"><a href="home.php">Home</a></li>
                        <li class="f_li"><a href="Weddings_gallery.php">Gallery</a></li>
                        <li class="f_li"><a href="event type.php">Services</a></li>
                        <li class="f_li"><a href="checkloginqoutation.php">Book now</a></li>
                        <li class="f_li"><a href="work_withus.php">Work with us</a></li>
                        <li class="f_li"><a href="aboutus.php">About us</a></li>
                        <li class="f_li"><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                        
                    </nav></TH>
                    
                    
            </table>
            <hr>
        </footer>
  

  </body>
</html>
