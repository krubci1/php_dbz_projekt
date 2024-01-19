<!-- forms.php -->
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
    <title>Dragon Ball</title>
</head>
<body>
    <!-- Your Navbar and Slides can be included here if needed -->

    <main>
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;margin-top:50px" id="main">
            <h2 class="w3-wide">User Registration</h2>
            <!-- Include your registration form here -->
            <?php include('registration_form.php'); ?>
            <br>
            <h2 class="w3-wide">User Login</h2>
            <!-- Include your login form here -->
            <?php include('login_form.php'); ?>
        </div>
    </main>

    <!-- Your Footer can be included here if needed -->
</body>
</html>
