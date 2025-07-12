<?php
session_start();
require_once __DIR__ . '/../config.php';

$result = $conn->query("SELECT * FROM tools ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Tools</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
  <?php include('../includes/sidebar.php'); ?>
  <div class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-4">Manage Tools</h1>
    <a href="tools_add.php" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Add New Tool</a>
    <table class="w-full border border-gray-300">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2 border">#</th>
          <th class="p-2 border">Name</th>
          <th class="p-2 border">Logo</th>
          <th class="p-2 border">Percentage</th>
          <th class="p-2 border">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($tool = $result->fetch_assoc()): ?>
        <tr class="text-center">
          <td class="border p-2"><?= $tool['id'] ?></td>
          <td class="border p-2"><?= htmlspecialchars($tool['name']) ?></td>
          <td class="border p-2"><img src="../image/tools/<?= $tool['logo'] ?>" width="40" /></td>
          <td class="border p-2"><?= $tool['percentage'] ?>%</td>
          <td class="border p-2">
            <a href="tools_edit.php?id=<?= $tool['id'] ?>" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
            <a href="tools_delete.php?id=<?= $tool['id'] ?>" onclick="return confirm('Delete this tool?')" class="bg-red-600 text-white px-3 py-1 rounded">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
