<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Calli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
      body{
          background-color: antiquewhite;
      }
    </style>
  <style>
.parallax {
    /* The image used */
    background-image: url("img/music12.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
      .parallax1 {
    /* The image used */
    background-image: url("img/music15.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<!-- navigation bar-->

<style>
    /* Style the navbar */
#navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
#navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
    </style>
    
<!-- slide -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: center;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>    
</head>



<body>
  
  <div id="navbar">
 
  <!--a href="upload.php">MUSIC</a-->
  
  <a href="contact.php">Contact</a>
  <!--a href="about.php">About Us</a-->
  <a href="Admin_login.php">Admin Login</a>
  <a href="display.php">MUSIC</a>
  
</div>
   
    <center><h1><b>HINDI MUSIC</b></h1>
  <p>ENJOY THE MUSIC</p></center>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="img/music8.jpg" style="width:100% ">
  <div class="text">MUSIC</div>
</div>

<div class="mySlides fade">
  
  <img src="img/music13.jpg" style="width:100%   ">
  <div class="text">MUSIC</div>
</div>

<div class="mySlides fade">
  
  <img src="img/music14.jpg" style="width:100% ">
  <div class="text">MUSIC</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

   
   
   <div class="parallax"></div>
   

<div style="height:100px;background-color:orange;font-size:36px">
Music Speaks what cannot be axpressed soothes the mind and gives it rest, heals the heart and makes flows from heaven to the soul.
</div> 
  
  
  <div class="parallax1"></div>
  <div style="height:100px;background-color:black;font-size:18px">
  <center>FeedBack from Users<br>
      @2017 All Rights Reserved
</center>
</div> 

   
   
   
   
 </body>
</html>