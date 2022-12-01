<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
     <title>Gallery Commercial Page</title>
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
     <a class="active" href="Commercial_gallery.php">Commercial</a>
     <a href="Family_gallery.php">Family Events</a>
     <a href="Others_gallery.php">Others</a>

     </div>
     </center>
	 </br></br></br>
	 
      <!----table---->
	 <div class="albums">
	 
	 <table align="center">
	 <tr>
	 <td>
     <div class="container">
	 
	 <div class="gallery">
	 <a href="Commercial Album 01.php">
	 <img src="src/CP/cp1.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Commercial Album 02.php">
	 <img src="src/CP/cp10.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Commercial Album 03.php">
	 <img src="src/CP/cp19.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Commercial Album 04.php">
	 <img src="src/CP/cp55.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Commercial Album 05.php">
	 <img src="src/CP/cp54.jpg">
	 </div>
	 
	 <div class="gallery">
	 <a href="Commercial Album 06.php">
	 <img src="src/CP/cp45.jpg">
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