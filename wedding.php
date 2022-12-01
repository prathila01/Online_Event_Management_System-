<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>wedding</title>
        <link rel="stylesheet" type="text/css" href="styles/events.css">
        <link rel="stylesheet" href="styles/eventheader.css">
		<link rel="stylesheet" href="styles/eventfooter.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
		 
        
    </head>
    <body>

    <header>
	<?php   include "nheader.php"; ?>
	</header>
    
    <div class="galleryContainer">
        <div class="slideShowContainer">
            <div id="playPause" onclick="playPauseSlides()"></div>
            <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
            <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
            <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
            
            <div class="imageHolder">
                <img src="src/wedding/img_1.jpg">
                <p class="captionText">Wedding couple</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_2.jpg">
                <p class="captionText">Wedding couple</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_3.jpg">
                <p class="captionText">Military Wedding</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_4.jpg">
                <p class="captionText">Wedding couple</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_5.jpg">
                <p class="captionText">Pop Corn</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_6.jpg">
                <p class="captionText">Beep beep</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_7.jpg">
                <p class="captionText">Austria</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_8.jpg">
                <p class="captionText">Do you know? before isaac Newton discovered gravity in 1687,brides can fly</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_9.jpg">
                <p class="captionText">Save water drink beer</p>
            </div>
            <div class="imageHolder">
                <img src="src/wedding/img_10.jpg">
                <p class="captionText">Wedding</p>
            </div>
        </div>
        <div id="dotsContainer"></div>
    </div>
    
    <!---testimonial--->
    
    <div class="container">
        <div class="wrapper">
            <div class="card">
                <div class="card-thumb">
                    <img src="src/testimonial/img-1.jpeg" class="client-img" alt="">
                    <span class="client-name">Natalie</span>
                </div>
                <div class="card-body">
                    <p class="review">“We day dream in KLIX's photography. Their imagery elicits an innate femininity and ethereal quality that makes our hearts flutter. KLIX has a vision unlike any other, mesmerizing us with the most beautiful moments.”</p>
                    <div class="rating">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-no-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-thumb">
                    <img src="src/testimonial/img-2.jpeg" class="client-img" alt="">
                    <span class="client-name">Oliver</span>
                </div>
                <div class="card-body">
                    <p class="review">"Thank you so much for being our photographer. I am in awe of your incredible talent and how you captured our loving moments. I could not have asked for anything more. We are very grateful and lucky to know you. Thank you from the bottom of our hearts, you made our lives very special!"</p>
                    <div class="rating">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-no-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-thumb">
                    <img src="src/testimonial/img-3.jpeg" class="client-img" alt="">
                    <span class="client-name">William</span>
                </div>
                <div class="card-body">
                    <p class="review">“Choosing KLIX was absolutely the best choice. KLIX made us feel at ease and full of confidence all at once, and each photo we took was carefully considered and styled effortlessly by KLIX expert hand. Thier amazing attention to detail and eye for beauty resulted in images that we will always treasure.”</p>
                    <div class="rating">
                       <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-fill.png" class="star" alt="">
                        <img src="src/testimonial/star-no-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
             </div>
             <div class="indicators">
                 <button class="active"></button>
                 <button></button>
                 <button></button>
             </div>
         </div>

       <!-- footer -->

		<footer>
		<?php   include "footer.php"; ?>
		</footer>
    
        <script src="script/testimonial.js"></script>
        <script src="script/slideshow.js"></script>
    </body>
</html>