<!-- login.php -->
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
    <title>Dragon Ball - Login</title>
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
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTER</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
  </div>
</div>
    <main>
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;margin-top:50px" id="main">
            <h2 class="w3-wide">User Login</h2>
            <!-- Include your login form here -->
            <?php include('login_form.php'); ?>
        </div>
    </main>

    <!-- Your Footer can be included here if needed -->
</body>
</html>
