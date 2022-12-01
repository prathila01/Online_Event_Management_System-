<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
     <title>Gallery Family Page</title>
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
	 

	 <a href="Weddings_gallery.php">Weddings</a>
     <a href="Commercial_gallery.php">Commercial</a>
     <a class="active" href="Family_gallery.php">Family Events</a>
     <a href="Others_gallery.php">Others</a>
	 
     </div>
     </center>
	 </br></br>
	 
	 
	 <div class="albums">
	 
     <!----table----> 
	 <table align="center">
	 <tr>
	 <td>
     <div class="container">
	 
	 <div class="gallery">
	 <a href="Family Album 01.php">
	 <img src="src/FP/fp1.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Family Album 02.php">
	 <img src="src/FP/fp2.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Family Album 03.php">
	 <img src="src/FP/fp3.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Family Album 04.php">
	 <img src="src/FP/fp5.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Family Album 05.php">
	 <img src="src/FP/fp6.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Family Album 06.php">
	 <img src="src/FP/fp9.jpg">
	 
	 </div>
	 
	 </div>
	 </td>
	 </tr>
	 </table>
	 
	 </div>
	 
	 </br></br></br>
     
	 
	
	</br></br></br>
	
	<footer>

         <?php   include "footer.php"; ?>

    </footer>
	


</body>

</html>