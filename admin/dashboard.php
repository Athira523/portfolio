<?php
session_start();
require_once __DIR__ . '/../config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}

// Fetch contact count
$sql = "SELECT COUNT(*) AS total_contacts FROM contacts";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalContacts = $row['total_contacts'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Olivia Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
  <?php include('../includes/sidebar.php'); ?>

  <div class="flex-1 p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Contact Card -->
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <div class="text-4xl text-green-600 font-bold"><?= $totalContacts ?></div>
        <div class="text-gray-600 mt-2">Total Contacts</div>
      </div>
      <!-- Add more cards here if needed -->
    </div>
  </div>
</body>
</html>
