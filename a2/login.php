<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <title>Assignment 2</title>
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
<div class="div3">Log in<br><br>
<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
Email: <br><input type="email" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
Password: <br><input type="password" name="password" maxlength="8"><br>
<input type="submit" value="Submit">
</form>
</div>
</body>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Xinyi Lei, s3713942</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</html>
