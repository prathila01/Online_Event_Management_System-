<?php session_start();?>


<!DOCTYPE html>
<html>

<head>
    <title>Contact page</title>
    <link rel="stylesheet" href="Styles/Contactus.css">


</head>

<body>

    <header>
	
         <?php   include "nheader.php"; ?>
		 
    </header>







   
    <!----content----->
    <div class="contact">
        <fieldset>

            <!-----add contact details and space using &nbsp------>
			</br>
            <p>&nbspPhone : &nbsp &nbsp   +94 112451248</p>
            <p>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +94 774125142</p>


            <p>&nbspEmail : &nbsp &nbsp&nbsp klixeventphotography@gmail.com</p>

            <p>&nbspAddress : &nbsp No 17/5,</p>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp   Main Street,</p>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp   Colombo.</p>

        </fieldset>
    </div>




    <!------add google map------->
    <div class="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585962832!2d79.78616421291653!3d6.9220039467265995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1633609490423!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  

    <!-----add contact form------>
    <center>
    <div class="contact-box">
        <h1>&nbsp &nbsp  &nbsp &nbsp Contact Us</h1></br></br>

        <form method="POST" action="contactdata.php">

            <input type="text" class="input-field" name="FName" placeholder="First name" required>
            <input type="text" class="input-field" name="LName" placeholder="Last name" required></br></br>
            <input type="text" class="input-field contact-field" name="Phone" placeholder="Phone number" required></br>
            <input type="email" class="input-field contact-field" name="eMail" placeholder="Email" required></br>
            <textarea type="text " class = "input-field textarea-field" name="Des" required>What do you want to say
		    </textarea>
            </br></br></br>
            <button type="submit" class="btn" name="submit">Submit</button>

        </form>
    </div>
    </center>
    



   </br></br></br></br>
	
	
	<footer>

         <?php   include "footer.php"; ?>

    </footer>




</body>

</html>