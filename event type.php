<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>events</title>
		<link rel="stylesheet" href="styles/event type.css">
		<!-- <link rel="stylesheet" href="styles/eventheader.css"> -->
		<link rel="stylesheet" href="styles/eventfooter.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
		 <!-- Add icon library -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
		
    <header>
	<?php   include "nheader.php"; ?>
	</header>
	

		<div class="container">
			<div class="box">
				<img src="src/event type/a.jpg">
				<div class="layer">
					<a href="wedding.php" class="hero-btn">WEDDING</a>
				</div>
			</div>
			<div class="box">
				<img src="src/event type/b.jpg">
				<div class="layer">
					<a href="family.php" class="hero-btn">FAMILY</a>
				</div>		  
			</div>
			<div class="box">
				<img src="src/event type/c.jpg">
				<div class="layer">
					<a href="corparate.php" class="hero-btn">CORPORATE</a>
				</div>
			</div>
			<div class="box">
				<img src="src/event type/d.jpg">
				<div class="layer">
					<a href="other.php" class="hero-btn">OTHER</a>
				</div>
			</div>			
		</div>

		<!-- footer -->

		<footer>
		<?php   include "footer.php"; ?>
		</footer>

	</body>
</html>