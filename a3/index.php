<!DOCTYPE html>
<html lang="en">
<head>

	 <meta charset="utf-8">
    <title>Assignment 3</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>

<h1 >Sunkun's Dessert Store</h1>
<h2>Cheap And Delicious Homemade Dessert</h2>
<ul>
<li><a class="active" href="index.php">Homepage</a></li> 
<li><a href="products.php">Our product</a></li>
<li><a href="login.php">Log in</a></li>
</ul>
</head>
<body background='../../media/background.png'>
<div class="slideshow-container">
  <div class="mySlides">
    <img class=slides src='../../media/cookies 2.png' alt='raspberry cookies'/>
  </div>
  <div class="mySlides">
    <img class=slides src='../../media/cake1.png'/ alt='matcha cake'>
  </div>
  <div class="mySlides">
    <img class=slides src='../../media/cookies 3.png' alt='matcha cookies'/>
  </div>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="div2">About Us</div>
<div class="div1">Sunkun's Dessert Store is a website that focus on selling homemade dessert.(raspberry cookies,chocolate chip cookies, cream cake,etc.)Our shop is just opened few times ago,we sell our cheaply priced dessert and all made from good stuff.We also can reduce our sugar level in case of health.</div>
</body>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Xinyi Lei, s3713942</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</html>
<?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
