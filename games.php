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
    <title>Games</title>
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
      <img src="Slike/budokai_3.webp" style="width: 50%;"></img>
    </div>
    <h2 class="w3-wide">Dragon Ball Z: Budokai 3</h2>
    <p class="w3-justify">Dragon Ball Z: Budokai 3 is a fighting video game based on the popular anime and manga series Dragon Ball Z. 
      It was developed by Dimps and published by Atari for the PlayStation 2 console. 
      It was released in 2004 in Japan and North America, and in 2005 in Europe.
      The game features a large roster of characters from the series, and allows players to engage in one-on-one battles using various special moves and transformations. 
      It also has a story mode that follows the events of the Dragon Ball Z anime, allowing players to experience key battles from the series. 
      Dragon Ball Budokai 3 received positive reviews upon release and was praised for its gameplay and character roster.</p>
      <div class="w3-display-container" style="margin-top:50px">
        <img src="Slike/bt3.jpg" style="width: 50%;"></img>
      </div>
      <h2 class="w3-wide">Dragon Ball Z: Budokai Tenkaichi 3</h2>
      <p class="w3-justify">Dragon Ball Z: Budokai Tenkaichi 3, also known as Dragon Ball Z: Sparking! METEOR in Japan, is a fighting game for the PlayStation 2, PlayStation 3, Wii, and Xbox 360.  
        It is the third installment in the Budokai Tenkaichi series and was developed by Spike. 
        The game was released on November 3, 2007, in Japan, November 13, 2007, in North America, and November 9, 2007, in Europe. 
        It features over 150 characters, including many that were not present in the original series, as well as various modes and gameplay mechanics. 
        The game received generally positive reviews upon release and was a commercial success, selling over two million copies worldwide.</p>
        <div class="w3-display-container" style="margin-top:50px">
          <img src="Slike/fighterz.jpg" style="width: 50%;"></img>
        </div>
        <h2 class="w3-wide">Dragon Ball Fighterz</h2>
        <p class="w3-justify">Dragon Ball FighterZ is a fighting game developed by Arc System Works and published by Bandai Namco Entertainment based on the Dragon Ball franchise. 
          It was released for PlayStation 4, Xbox One, and Microsoft Windows in 2018. 
          The game features 3v3 battles, where players can select a team of three characters from the Dragon Ball series and use various attacks and special abilities to defeat their opponents. 
          It received positive reviews for its gameplay, graphics, and faithful representation of the source material.</p>
          <div class="w3-display-container" style="margin-top:50px">
            <img src="Slike/xeno2.jfif" style="width: 50%;"></img>
          </div>
          <h2 class="w3-wide">Dragon Ball Xenoverse 2</h2>
          <p class="w3-justify">Dragon Ball Xenoverse 2 is a fighting role-playing video game developed by Dimps and published by Bandai Namco Entertainment based on the Dragon Ball franchise. 
            It is the sequel to Dragon Ball Xenoverse that was released in 2015. 
            The game is set in the Dragon Ball universe and features a story mode where players can create their own character and follow a new story that involves the player's character traveling through time to fix historical events that have been altered. 
            The game features a number of new characters and features, as well as the return of many popular characters from the Dragon Ball series. 
            It also includes an online multiplayer mode where players can fight against each other.</p>
    <div class="w3-display-container" style="margin-top:50px">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gQvTaScTVQI"  
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