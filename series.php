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
    <title>Series</title>
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
    <div class="w3-display-container" style="margin-top:50px">
      <img src="Slike/db.jpg" style="width: 50%;"></img>
    </div>
    <h2 class="w3-wide">Dragon Ball</h2>
    <p class="w3-justify">Dragon Ball is a Japanese anime television series produced by Toei Animation.  
      It is an adaptation of the first 194 chapters of the manga of the same name created by Akira Toriyama, which were published in Weekly Shōnen Jump from 1984 to 1995. 
      The anime is composed of 153 episodes that were broadcast on Fuji TV from February 1986 to April 1989. 
      It was broadcast in 81 countries worldwide. It is part of the Dragon Ball media franchise.
      The story of Dragon Ball follows Goku and his friends as they travel the world searching for the Dragon Balls, which are seven magical balls scattered around the world. 
      Along the way, they encounter a wide range of enemies and allies and must use their martial arts skills to defend the Earth from powerful threats. 
      The series is known for its action battles and colorful characters.</p>
      <div class="w3-display-container" style="margin-top:50px">
        <img src="Slike/dbz.webp" style="width: 50%;"></img>
      </div>
      <h2 class="w3-wide">Dragon Ball Z</h2>
      <p class="w3-justify">Dragon Ball Z is a Japanese anime television series produced by Toei Animation. 
        It is the sequel to the Dragon Ball anime and adapts the latter 325 chapters of the original 519-chapter Dragon Ball manga series created by Akira Toriyama. 
        The Dragon Ball Z anime is composed of two parts: the first part, also known as "Saga 1," covers the Raditz Saga through the Frieza Saga; the second part, also known as "Saga 2," covers the Trunks Saga through the end of the series. 
        The anime was broadcast in Japan on Fuji TV from April 26, 1989 to January 31, 1996. 
        Dragon Ball Z aired in Japan on Fuji TV and was dubbed in several languages for international release. 
        The series was licensed by Funimation for an English-language release in North America.</p>
        <div class="w3-display-container" style="margin-top:50px">
          <img src="Slike/dbs.jpg" style="width: 50%;"></img>
        </div>
        <h2 class="w3-wide">Dragon Ball Super</h2>
        <p class="w3-justify">Dragon Ball Super is a Japanese anime television series produced by Toei Animation that began airing on July 5, 2015 and ended on March 25, 2018. 
          It is the sequel to the Dragon Ball Z anime and the Dragon Ball manga, and adapts the latter 325 chapters of the original 519-chapter Dragon Ball manga series created by Akira Toriyama which ran in Weekly Shōnen Jump from 1988-1995. 
          It follows the story of Goku and his friends as they defend the Earth against powerful villains from outer space and other dimensions. 
          The show also features the return of Frieza, a powerful villain who was defeated by Goku in the Dragon Ball Z anime. 
          The series also introduces new characters, such as the God of Destruction Beerus, his attendant Whis, and Goku's older brother Raditz. 
          Dragon Ball Super was well-received by both audiences and critics, and has been credited for reinvigorating the Dragon Ball franchise.</p>
    <div class="w3-display-container" style="margin-top:50px">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/f5bVVDuYdp4"  
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