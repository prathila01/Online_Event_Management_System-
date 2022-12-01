<?php session_start();?>


<!DOCTYPE html>
<html>

<head>
     <title>Gallery Weddings Page</title>
      <link rel="stylesheet" href="styles/Weddings.css">


</head>
    
<body>

    <header>
	
         <?php   include "nheader.php"; ?>
		 
    </header>





    <!---Content--->
    </br></br>
    <center>
	
    <div class="navi">
	 

     <a class="active" href="Weddings_gallery.php">Weddings</a>
     <a href="Commercial_gallery.php">Commercial</a>
     <a href="Family_gallery.php">Family Events</a>
     <a href="Others_gallery.php">Others</a>
	 
    </div>
    </center>
	</br></br></br>
	
	 <div class="albums">
	<!----table---->
	<table align="center">
	<tr>
	<td>
    <div class="container">
	 
	 <div class="gallery">
	 <a href="Wedding Album 01.php">
	 <img src="src/WP/wp1.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Wedding Album 02.php">
	 <img src="src/WP/wp2.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Wedding Album 03.php">
	 <img src="src/WP/wp4.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Wedding Album 04.php">
	 <img src="src/WP/wp3.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Wedding Album 05.php">
	 <img src="src/WP/wp5.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Wedding Album 01.php">
	 <img src="src/WP/wp7.jpg">
	 </div>
	 
	</div>
	</td>
	</tr>
	</table>
	
	
	</div>
	 
	</br></br></br>
   
	<!-- <fieldset class="snaps">
	 
	 </br>
	 <h1>Looking for your snaps?...</h1>
	  
	 
	</br></br>
	<div class="firstcol">
	
	 
	 <select class="events">
	 <option></option>
     <option value="Weddings">Weddings</option>
     <option value="Commercial">Commercial</option>
     <option value="Family Events">Family Events</option>
     <option value="Others">Others</option>
     </select>
	
	 
	
	 </br> </br><input type="date" class ="inputtype"></br></br>
	
	</div>
	 
	 
	 
	<div class="secondcol">
	 
	 
	 </br><input type="submit" class="smtbtn" value="Search">
	 
	</div> -->
	 
	
	 
	
	
	
	
	
	
	</br></br></br>
	
	<footer>

         <?php   include "footer.php"; ?>

    </footer>
	



</body>

</html>