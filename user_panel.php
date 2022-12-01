<?php session_start();
include 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>user panel</title>
    <link rel="stylesheet" href="styles/user_panel.css">
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>

 <header>
<?php   include "nheader.php"; ?>
</header>
<!-- -------------get relevnt cust ID---------------------------------- -->
<?php

$id = $_SESSION['name'];
$sql2 = "SELECT cust_ID FROM credentials_customer WHERE cust_mail='$id' ";
$result2 = $conn->query($sql2);
$row2 = $result2 -> fetch_assoc();
$releventid = $row2['cust_ID'];

?>


<table class="user_panel" >
<tr>
<td class="first_item">
<img class="avatr" src="src/login.png" style="border-radius: 50%;width:200px; height:200px;"/><br>

</td>

<td rowspan="2">    
<div class="table_responsive">
    <table class="bookings">
      <thead>
        <tr>
          <th>Order NO</th>
          <th>Order Name</th>
          <th>Action</th>
        </tr>
      </thead>
  
      <tbody>
        <?php

         

         $query=" SELECT reserv_ID,reserv_type FROM reservation_details WHERE cust_ID='$releventid' ";

         $result = $conn->query($query);

         if($result-> num_rows > 0){
	        while($row = $result->fetch_assoc()){
		       echo "<tr><td id='r_ID'>" . $row["reserv_ID"] . "</td><td>" .$row["reserv_type"] . "</td><td><a href='cancel.php ?id=$row[reserv_ID]'><input type='submit' value='Cancel' name='cancel_btn' class='action_btn'></a></td></tr>";
	        }
         }
         else{
	           echo "<tr><td>" . "No events" . "</td></tr>";
         }

          $conn->close();
?>     
     

      
      </tbody>
    </table>
  </div>
  </td>

</tr>
<tr><td>
<div class="user_details">
<?php 
			if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                echo '<br>'.$name;
			
                
            }else {
              echo '<br>'."User not Valid.";
            }

			?>

</div>
</td>
</tr>



  </tr>  
 </table>
 
 <div class="cancel_msg">

   <?php if (isset($_GET['feedback'])): ?>
		    <p class="cancel_msg"><?php echo $_GET['feedback']; ?></p>
	    <?php endif;
              
        
        ?>
</div></div> 

 <footer>

<?php   include "footer.php"; ?>

</footer>
</body>
</html>