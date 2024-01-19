<?php
// Session start check
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
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
    <title>Abridged</title>
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

<?php
  // Mandatory Login
  if (!$isLoggedIn) {
    echo '<p>Please log in to access this content.';

    echo ' <a href="login.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Login</a> or <a href="register.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Register</a>.</p>';
} else {
    // If logged in the rest can be seen
?>
<main>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;margin-top:50px" id="main">
    <h2 class="w3-wide">Dragon Ball Abridged</h2>
    <p class="w3-justify">Dragon Ball Abridged is a comedic web series created by Team Four Star, a group of voice actors and internet personalities. 
      It is a parody of the Dragon Ball Z anime series, and is known for its humorous and irreverent take on the source material. 
      The series has gained a large online following and has spawned a number of spin-off videos and merchandise. 
      While the series has faced some legal challenges and controversy, it has also received praise for its humor and production value.
      The series ended in 2019 after completing 52 episodes, covering the entire Dragon Ball Z series. 
      The team behind the series announced that they had completed their goal of parodying the entire Dragon Ball Z series and decided to end the series. 
      They also mentioned that they wanted to focus on other projects.</p>
    <div class="w3-display-container" style="margin-top:50px">
      <img src="Slike/TFS.webp" style="width: 50%;"></img>
      <figcaption>Team Four Star logo</figcaption>
    </div>
    <div class="w3-display-container" style="margin-top:50px">
      <img src="Slike/tfs_team.jpeg" style="width: 100%;"></img>
      <figcaption>Team Four Star team</figcaption>
    </div>
    <div class="w3-display-container" style="margin-top:50px">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/kYBAJC-plDI"  
      frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
    </div>
  </div>
</main>
<?php
  }
?>
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