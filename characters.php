<?php
// Session start check
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="projekt.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="some description">
    <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <title>Characters</title>
  </head>
  <body>
    <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="author.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">AUTHOR</a>
    <a href="characters.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CHARACTERS</a>
    <a href="series.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SERIES</a>
    <a href="games.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">GAMES</a>
    <a href="abridged.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABRIDGED</a>
    <?php
        if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
            echo '<a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTER</a>';
            echo '<a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>';
        } else {
            echo '<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WELCOME, ' . $_SESSION['username'] . '</a>';
            echo '<a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGOUT</a>';
        }
        ?>
  </div>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center">
    <img src="Slike/Dragon-Ball-Logo.png" style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><b>“Push through the pain, giving up hurts more.” – Vegeta</h3></b>  
    </div>
  </div>
<main>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;margin-top:50px" id="main">
    <h2 class="w3-wide">Dragon Ball characters</h2>
    <p class="w3-justify">Some of the main characters in Dragon Ball include:<br><br>

      Goku: The main protagonist of the series. He is a Saiyan warrior who was sent to Earth as a child. He is good and brave and always ready to defend Earth from evil. Goku can transform into Great Ape when he sees a full moon and can also transform into Super Saiyan, a powerful form that allows him access to higher levels of strength.<br><br>
      
      Vegeta: A proud and egoistic Saiyan prince who initially seeks to destroy Earth. However, after being defeated by Goku, he becomes a member of the Z Fighters and begins to protect Earth. Vegeta is very competitive and constantly strives to become stronger.<br><br>
      
      Piccolo: A Namekian warrior and reincarnation of the evil King Piccolo. He starts out as an enemy of Goku, but eventually becomes one of his closest allies and good friends. Piccolo is a skilled fighter and can use his ability to extend his arms in battle.
      
      Other notable characters in the series include Bulma, Krillin, Trunks, Goten, and Frieza.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Goku</p>
        <img src="Slike/goku.png" class="w3-round w3-margin-bottom" alt="Goku" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Vegeta</p>
        <img src="Slike/vegeta.webp" class="w3-round w3-margin-bottom" alt="Vegeta" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Gohan</p>
        <img src="Slike/gohan.webp" class="w3-round w3-margin-bottom" alt="Gohan" style="width:100%">
      </div>
    </div>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Piccolo</p>
        <img src="Slike/piccolo.png" class="w3-round w3-margin-bottom" alt="Piccolo" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Krillin</p>
        <img src="Slike/krillin.png" class="w3-round w3-margin-bottom" alt="Krillin" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Bulma</p>
        <img src="Slike/bulma.webp" class="w3-round w3-margin-bottom" alt="Bulma" style="width:100%">
      </div>
    </div>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Yamcha</p>
        <img src="Slike/yamcha.png" class="w3-round w3-margin-bottom" alt="Yamcha" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Tien</p>
        <img src="Slike/tien.png" class="w3-round w3-margin-bottom" alt="Tien" style="width:100%">
      </div>
      <div class="w3-third">
        <p>Roshi</p>
        <img src="Slike/roshi.webp" class="w3-round w3-margin-bottom" alt="Roshi" style="width:100%">
      </div>
    </div>
    <div class="w3-display-container" style="margin-top:50px">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/JawntPKjVZE"  
      frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
    </div>
  </div>
</main>
  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">COPYRIGHT © 2024<a href="https://github.com/krubci1" target="_blank">KARLO RUBČIĆ</a></p>
  </footer>
  </body>
</html>