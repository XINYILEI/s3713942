<?php
session_start();
?>
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
<body background="../../media/background.png">


<div class="slideshow-container">
 
<div class="mySlides">
    
<img class=slides src="../../media/cake2.png" alt="matcha and chesnut mousse1">
  
</div>
  
<div class="mySlides">
    
<img class=slides src="../../media/cake3.png" alt="matcha and chesnut mousse2'">
  
</div>

</div>

<div style="text-align:center">
  
<span class="dot" onclick="currentSlide(1)"></span> 
  
<span class="dot" onclick="currentSlide(2)"></span> 

</div>


<h2>Matcha and Chestnut Mousse(450g)<br>$20.00  <select>
  
<option value="normal sugar?id=1">Normal Sugar</option>
  
<option value="less sugar?id=2">Less Sugar</option>
</select>

</h2>


<div class="div4">This dessert is made from matcha and chesnut and is not too sweet.Combine the little bit flavour from rich matcha mousse and the sweet flavour from chesnut jelly.</div>

<form method="post" action="cart.php">  
<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>  
<input type="number" id="number" value="1" min="1" max="10"/>  
<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
<p><input type="submit"value="add"></p>
</form>

<?php
$products=array(
'123'=>array('OID'=>'N','Title'=>'Matcha and chesnut mousse','Description'=>'flavour cake','Option'=>'Normal sugar','Price'=>20.00),
'124'=>array('OID'=>'L','Title'=>'Matcha and chesnut mousse','Description'=>'flavour cake','Option'=>'Less sugar','Price'=>20.00)
);
$_SESSION['cart']=$products;
if (isset($_POST['add'], $_POST['ID'], $_POST['qty'], $_POST['OID'],$_POST['Option'])) {
  // server side code is required here to validate and check if
  //  - qty is a positive integer (ie 1 or more)
  //  - product/service and option ids are valid
$_SESSION['cart'][]=$_POST['add'];
  $_SESSION['cart'][$id]['OID'] = $oid;
  $_SESSION['cart'][$id]['qty'] = $qty;
  $_SESSION['cart'][$id]['Option']=$option;
  // redirection BEFORE any HTML is outputted
  header("Location: cart.php");
}



?>


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
  
if (n > slides.length) 
{slideIndex = 1} 
  
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


function increaseValue() {
  
var value = parseInt(document.getElementById('number').value, 10);
  
value = isNaN(value) ? 1 : value;
  
value++;
  
document.getElementById('number').value = value;

}


function decreaseValue() {
  
var value = parseInt(document.getElementById('number').value, 10);
  
value = isNaN(value) ? 1 : value;
  
value < 2 ? value = 2 : '';
  
value--;
  
document.getElementById('number').value = value;
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
