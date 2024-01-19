<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "users.xml";

    $ime = $_POST["first_name"];
    $prezime = $_POST["last_name"];
    $datum_rodenja = $_POST["dob"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Validate form data
    if (empty($ime) || empty($prezime) || empty($datum_rodenja) || empty($username) || empty($email) || empty($_POST["password"])) {
        echo '<div style="text-align: center; margin-top: 20px;">';
        echo '<p style="color: #d9534f; font-size: 18px;">Incomplete form data. Please fill in all the required fields.</p>';
        // Add a button to go back to registration
        echo '<a href="register.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Back to Registration</a>';
        echo '</div>';
        exit;
    }

    // Check if the XML file exists
    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
        // Check if username or email already exist
        foreach ($xml->user as $user) {
            if ($user->username == $username) {
                // Username already exists
                echo '<div style="text-align: center; margin-top: 20px;">';
                echo '<p style="color: #d9534f; font-size: 18px;">Username already exists. Please choose a different username.</p>';
                // Add a button to go back to registration
                echo '<a href="register.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Back to Registration</a>';
                echo '</div>';
                exit;
            } elseif ($user->email == $email) {
                // Email already exists
                echo '<div style="text-align: center; margin-top: 20px;">';
                echo '<p style="color: #d9534f; font-size: 18px;">Email already exists. Please use a different email address.</p>';
                // Add a button to go back to registration
                echo '<a href="register.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Back to Registration</a>';
                echo '</div>';
                exit;
            }
        }
        
        // Add a new user to the XML file
        $newUser = $xml->addChild("user");
        $newUser->addChild("ime", $ime);
        $newUser->addChild("prezime", $prezime);
        $newUser->addChild("datum_rodenja", $datum_rodenja);
        $newUser->addChild("username", $username);
        $newUser->addChild("email", $email);
        $newUser->addChild("password", $password);
    } else {
        // Create a new XML file and add a user
        $xml = new SimpleXMLElement("<users></users>");
        $newUser = $xml->addChild("user");
        $newUser->addChild("ime", $ime);
        $newUser->addChild("prezime", $prezime);
        $newUser->addChild("datum_rodenja", $datum_rodenja);
        $newUser->addChild("username", $username);
        $newUser->addChild("email", $email);
        $newUser->addChild("password", $password);
    }

    // Save changes to the XML file
    $xml->asXML($xmlFile);

    // Set session for the logged-in user
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Redirect the user to the homepage
    header("Location: index.php");
    exit();
} else {
    echo "Unauthorized access!";
}
?>
