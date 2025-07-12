<?php
session_start();

// Destroy all session data securely
$_SESSION = []; // Unset all session variables

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy(); // Destroy session file

// Set logout message in a new session
session_start();
$_SESSION['logout_message'] = "You are successfully logged out.";
session_write_close();

header("Location: admin_login.php");
exit();
