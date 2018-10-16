
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
<div class="row">
  <form method="post" action="product.php">
<div class="column">
<img class=image src="../../media/cookies 1.png" alt="aojiru cookies">
 <p>Aojiru Cookies<br>$8.50<br>Made from the juice of young barley grass which is a rich source of certain vitamins and minerals.</p>

</div>
<div class="column">
<img class=image src="../../media/cake2.png" alt="matcha and chestnut mousse">
<p><input type="submit"value="more info"><?php $id=$data[1][1]&$data[2][1]?>Matcha and Chestnut Mousse<br>$20.00<br>Rich matcha mousse at the top and chestnut jelly at the bottom.</a></p>
</div>
<div class="column">
<img class=image src="../../media/cookies 2.png" alt="raspberry cookies">
<p>Raspberry Cookies<br>$6.50<br>Good quality tasty raspberry with butter cookies.</p>
</div>
<div class="column">
<img class=image src="../../media/cookie 4.png" alt="matcha cookies">
<p>Matcha Cookies<br>$7.50<br>The mixing flavour of traditional matcha and butter cookies.</p>
</div>
</div>
<?php
$row = 1;
if (($handle = fopen("products.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
          $data[$c] . "<br />\n";
        for ($c=0;$c<2;$c++) { 
          $data[$c]=array('ID','OID','Title','Description','Option','Price');
        }
        }
    }
    fclose($handle);
}
?>


</body>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Xinyi Lei, s3713942</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</html>
<?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
