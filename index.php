<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Cyberbullying Home</title>
</head>
<body>
  <header>
    <h1>Welcome to Cyberbullying Awareness</h1>
    <nav>
      <a href="about.php">What is Cyberbullying?</a>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
    </nav>
  </header>
  <div class="image-gallery">
        <img class="myImg" src="images/imgg5.webp"  width="350">
        <img class="myImg" src="images/imgg6.jpg"  width="350">
        <img class="myImg" src="images/img3.jpg"   width="350">
		<img class="myImg" src="images/img2.webp"  width="350">
    </div>
    <center><div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div></center>
    <script src="script.js"></script>
</body>
</html>