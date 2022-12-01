
<!DOCTYPE html>
<html>
    <head><title>EPMS</title>       
        
        <link rel="stylesheet" href="styles/header.css">   
		<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Staatliches&display=swap" rel="stylesheet">   
 </head>

    <body>

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
			echo("<li>	<a href='user_panel.php'> <img src='src/login.png' style='width:25px; height:25px;'> </a></li>");
			echo ("<li style = 'padding-top:3%;'>".$name."</li>");
			echo ("<li><a href='logout.php' style='padding-left:5%;background-color:#cd5c5c;' >LogOut</a></li>");
			
		}else {
			echo ("<img  src='src/login.png' style='width:25px; height:25px; padding-top:4%;'> <a href='login.php'>Login</a> | <a href='login.php'>Sign Up</a>");
		}

		?>
	</ul>
	</div>
	</td>
	</tr>
	
	<tr>
	<td>
	<div id="nav_bar" style="float:right;">
		<ul class="nav_main">
			<li><a href="home.php">Home</a></li>
			<li><a href="Weddings_gallery.php">Gallery</a></li>
			<li><a href="event type.php">Services</a></li>
			<li><a href="checkloginqoutation.php">Book now</a></li>
			<li><a href="work_withus.php">Work with us</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contactus.php">Contact</a></li>
			<li id="search_bar">
			<input class="search-txt" type="text" name="" placeholder="Search" >
			<a class="search-btn" href="#"></a>
			</li>
		</ul>
	</div>
	
	</td>
	</tr>
	</table>

</div>
	<!-- header ending -->
    </body>
</html>