<?php
session_start();

// Store the message in a temporary variable
$_SESSION['logout_message'] = "You are successfully logged out.";

// Now destroy session **after** storing the message
session_write_close(); // Make sure the session is saved before redirecting
header("Location: admin_login.php");
exit();
