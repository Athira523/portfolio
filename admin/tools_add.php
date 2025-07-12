<?php
session_start();
require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $percentage = $_POST['percentage'];

    // Image upload
    $logo = $_FILES['logo']['name'];
    $tmp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($tmp, "../image/tools/" . $logo);

    $stmt = $conn->prepare("INSERT INTO tools (name, logo, percentage) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $logo, $percentage);
    $stmt->execute();

    header("Location: tools_manage.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Tool</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
  <?php include('../includes/sidebar.php'); ?>
  <div class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-6">Add New Tool</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
      <input type="text" name="name" placeholder="Tool Name" required class="w-full p-2 border rounded" />
      <input type="number" name="percentage" placeholder="Percentage" required class="w-full p-2 border rounded" />
      <input type="file" name="logo" accept="image/*" required class="w-full p-2" />
      <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded">Add Tool</button>
    </form>
  </div>
</body>
</html>
