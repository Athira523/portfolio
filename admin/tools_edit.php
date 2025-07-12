<?php
session_start();
require_once __DIR__ . '/../config.php';

$id = $_GET['id'];
$tool = $conn->query("SELECT * FROM tools WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $percentage = $_POST['percentage'];

    if ($_FILES['logo']['name']) {
        $logo = $_FILES['logo']['name'];
        $tmp = $_FILES['logo']['tmp_name'];
        move_uploaded_file($tmp, "../image/tools/" . $logo);
        $conn->query("UPDATE tools SET name='$name', percentage=$percentage, logo='$logo' WHERE id=$id");
    } else {
        $conn->query("UPDATE tools SET name='$name', percentage=$percentage WHERE id=$id");
    }

    header("Location: tools_manage.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Tool</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
  <?php include('../includes/sidebar.php'); ?>
  <div class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-6">Edit Tool</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
      <input type="text" name="name" value="<?= htmlspecialchars($tool['name']) ?>" required class="w-full p-2 border rounded" />
      <input type="number" name="percentage" value="<?= $tool['percentage'] ?>" required class="w-full p-2 border rounded" />
      <input type="file" name="logo" class="w-full p-2" />
      <img src="../image/tools/<?= $tool['logo'] ?>" width="80" class="mt-2" />
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Update Tool</button>
    </form>
  </div>
</body>
</html>
