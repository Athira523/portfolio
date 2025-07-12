<?php
session_start();
require_once __DIR__ . '/../config.php';

$logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
<?php if ($logged_in): ?>
  <?php include('../includes/sidebar.php'); ?>
<?php endif; ?>
<div class="flex-1 p-8">
  <?php if ($logged_in): ?>
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h1>

    <?php
    $contact_count = 0;
    $query = "SELECT COUNT(*) AS total FROM contacts";
    $res = $conn->query($query);
    if ($res && $row = $res->fetch_assoc()) {
        $contact_count = $row['total'];
    }
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <div class="text-green-600 text-3xl font-bold"><?= $contact_count ?></div>
        <div class="mt-2 text-gray-700">Total Contacts</div>
      </div>
    </div>
  <?php else: ?>
    <p class="text-center text-red-600 font-semibold mt-10">
      You must be logged in to view the dashboard.<br>
      <a href="admin_login.php" class="text-blue-700 underline">Login here</a>
    </p>
  <?php endif; ?>
</div>
</body>
</html>
