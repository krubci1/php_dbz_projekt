<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "users.xml";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_successful = false;

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);

        foreach ($xml->user as $user) {
            if ($user->username == $username && password_verify($password, $user->password)) {
                // Set session after successful login
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $login_successful = true;
                break;
            }
        }
    }

    if (!$login_successful) {
        // Unsuccessful login. Check the username and password.
        echo '<div style="text-align: center; margin-top: 20px;">';
        echo '<p style="color: #d9534f; font-size: 18px;">Unsuccessful login. Check the username and password.</p>';
        // Add a button to go back to login.php
        echo '<a href="login.php" style="display: inline-block; padding: 10px 15px; background-color: #ffa500; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Back to Login</a>';
        echo '</div>';
        exit;
    }

    // Check if there is a previous URL stored in the session
    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';

    // Redirect the user to the previous page or the homepage
    header("Location: " . $redirect_url);
    exit;
} else {
    echo "Unauthorized access!";
}
?>
