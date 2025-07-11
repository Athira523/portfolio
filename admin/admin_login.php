<?php
session_start();
require_once '../includes/config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];
            header("Location: showpage.php");
            exit();
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "User not found.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login - Olivia</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-bold text-center mb-6 text-green-900">Admin Login</h2>

    <!-- Logout success message -->
    <?php
if (isset($_SESSION['logout_message'])) {
    echo '<div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 text-sm text-center">'
         . $_SESSION['logout_message'] .
         '</div>';
    unset($_SESSION['logout_message']);
}
?>


    <!-- Login error -->
    <?php if ($error): ?>
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm text-center"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <input type="text" name="username" placeholder="Username" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-700">
      <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-700">
      <button type="submit" class="w-full bg-green-700 text-white py-2 rounded hover:bg-green-800">Login</button>
    </form>
  </div>
  
</body>
</html>
