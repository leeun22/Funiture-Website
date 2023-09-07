 <!DOCTYPE html>
 <html>

 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
     * {
       box-sizing: border-box;
     }

     body {
       font-family: Verdana, sans-serif;
       margin: 0 auto;
     }

     /* Slideshow container */
     .slideshow-container {
       max-width: 100%;
       position: relative;
       margin: 0 auto;
       text-align: center;
     }

     .mySlides {
       display: none;
       background-size: cover;
       background-position: 50% 50%;
     }

     .mySlides img {
       width: 100%;
       height: 590px;
     }

     .slideshow-container .mySlides img {
       vertical-align: middle;
       object-fit: cover;
       object-position: 50% 50%;
     }

     /* Next & previous buttons */
     .prev,
     .next {
       cursor: pointer;
       position: absolute;
       top: 50%;
       width: auto;
       padding: 16px;
       margin-top: -22px;
       color: white;
       font-weight: bold;
       font-size: 18px;
       transition: 0.6s ease;
       border-radius: 0 3px 3px 0;
       user-select: none;
     }

     /* Position the "next button" to the left */
     .prev {
       left: 0;
       border-radius: 0 3px 3px 0;
     }

     /* Position the "next button" to the right */
     .next {
       right: 0;
       border-radius: 3px 0 0 3px;
     }

     /* On hover, add a black background color with a little bit see-through */
     .prev:hover,
     .next:hover {
       background-color: rgba(0, 0, 0, 0.8);
       text-decoration: none;
       color: white;
     }

     /* Caption text */
     .text {
       color: #f2f2f2;
       font-size: 18px;
       padding: 8px 12px;
       position: absolute;
       bottom: 8px;
       width: 100%;
       text-align: center;
       text-shadow: 0px 5px 5px #999999;
     }

     /* Number text (1/3 etc) */
     .numbertext {
       color: #f2f2f2;
       font-size: 12px;
       padding: 8px 12px;
       position: absolute;
       top: 0;
       left: 20px;
       text-shadow: 0px 5px 5px #999999;
     }

     /* The dots/bullets/indicators */
     .dot {
       cursor: pointer;
       height: 15px;
       width: 15px;
       margin: 0 2px;
       background-color: #bbb;
       border-radius: 50%;
       display: inline-block;
       transition: background-color 0.6s ease;
     }

     .active,
     .dot:hover {
       background-color: #717171;
     }

     /* Fading animation */
     .fade {
       animation-name: fade;
       animation-duration: 2s;
     }

     @keyframes fade {
       from {
         opacity: .4
       }

       to {
         opacity: 1
       }
     }

     /* On smaller screens, responsive size */
     @media only screen and (max-width: 1020px) {
      .mySlides img {
         height: 500px;
       }
     }
     @media only screen and (max-width: 835px) {
      .mySlides img {
         height: 400px;
       }
     }
     @media only screen and (max-width: 736px) {
      .mySlides img {
         height: 335px;
       }
     }
     @media only screen and (max-width: 450px) {
      .mySlides img {
         height: 290px;
       }
     }

     @media only screen and (max-width: 300px) {

       .prev,
       .next,
       .text {
         font-size: 11px;
       }
     }
   </style>
 </head>

 <body>

   <div class="slideshow-container">

     <div class="mySlides fade">
       <div class="numbertext">1 / 6</div>
       <img src="images/anh1.jpg">
       <div class="text">Minh Phong</div>
     </div>

     <div class="mySlides fade">
       <div class="numbertext">2 / 6</div>
       <img src="images/anh2.jpg">
       <div class="text">Minh Phong</div>
     </div>

     <div class="mySlides fade">
       <div class="numbertext">3 / 6</div>
       <img src="images/slider3.jpg">
       <div class="text">Minh Phong</div>
     </div>

     <div class="mySlides fade">
       <div class="numbertext">4 / 6</div>
       <img src="images/slider4.jpg">
       <div class="text">Minh Phong</div>
     </div>

     <div class="mySlides fade">
       <div class="numbertext">5 / 6</div>
       <img src="images/slider1.png">
       <div class="text">Minh Phong</div>
     </div>

     <!-- <div class="mySlides fade">
       <div class="numbertext">6 / 6</div>
       <img src="images/slider6.jpg" width="97%" height="530">
       <div class="text">Minh Phong</div>
     </div> -->

     <a class="prev" onclick="plusSlides(-1)">❮</a>
     <a class="next" onclick="plusSlides(1)">❯</a>

   </div>
   <br>

   <div style="text-align:center">
     <span class="dot" onclick="currentSlide(1)"></span>
     <span class="dot" onclick="currentSlide(2)"></span>
     <span class="dot" onclick="currentSlide(3)"></span>
     <span class="dot" onclick="currentSlide(4)"></span>
     <span class="dot" onclick="currentSlide(5)"></span>
     <!-- <span class="dot" onclick="currentSlide(6)"></span> -->
   </div>

   <script>
     let slideIndex = 0;
     showSlides(slideIndex);

     function plusSlides(n) {
       showSlides(slideIndex += n);
     }

     function currentSlide(n) {
       showSlides(slideIndex = n);
     }

     function showSlides(n) {
       let i;
       let slides = document.getElementsByClassName("mySlides");
       let dots = document.getElementsByClassName("dot");
       if (n > slides.length) {
         slideIndex = 1
       }
       if (n < 1) {
         slideIndex = slides.length
       }
       for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
       }
       for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
       }
       slides[slideIndex - 1].style.display = "block";
       dots[slideIndex - 1].className += " active";
     }


     let slideIndexAuto = 0;
     showSlidesAuto();

     function showSlidesAuto() {
       let i;
       let slides = document.getElementsByClassName("mySlides");
       let dots = document.getElementsByClassName("dot");
       for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
       }
       slideIndexAuto++;
       if (slideIndexAuto > slides.length) {
         slideIndexAuto = 1
       }
       for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
       }
       slides[slideIndexAuto - 1].style.display = "block";
       dots[slideIndexAuto - 1].className += " active";
       setTimeout(showSlidesAuto, 2000); // Change image every 2 seconds
     }
   </script>

 </body>

 </html>