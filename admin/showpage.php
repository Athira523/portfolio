<?php
session_start();
require_once __DIR__ . '/../config.php';

$logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

if ($logged_in && isset($_GET['page']) && $_GET['page'] === 'contacts') {
    $sql = "SELECT id, name, email, phone, service, budget, country, message, created_at FROM contacts ORDER BY id DESC";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Submissions - Olivia</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
  <div class="flex flex-1">
    <?php if ($logged_in): ?>
      <?php include('../includes/sidebar.php'); ?>
    <?php endif; ?>

    <div class="flex-1 p-8">
      <?php if (!$logged_in): ?>
        <p class="text-center text-red-600 font-semibold mt-10">
          You must be logged in to view Dashboard.<br>
          <a href="admin_login.php" class="text-blue-700 underline">Login here</a>
        </p>
      <?php elseif (isset($_GET['page']) && $_GET['page'] === 'contacts'): ?>
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Contact Submissions</h1>
        <?php if ($result && $result->num_rows > 0): ?>
          <div class="overflow-auto bg-white rounded-lg shadow p-4">
            <table class="w-full border-collapse">
              <thead class="bg-green-900 text-white">
                <tr>
                  <th class="p-3 border">Sl. No.</th>
                  <th class="p-3 border">Name</th>
                  <th class="p-3 border">Email</th>
                  <th class="p-3 border">Phone</th>
                  <th class="p-3 border">Service</th>
                  <th class="p-3 border">Budget</th>
                  <th class="p-3 border">Country</th>
                  <th class="p-3 border">Message</th>
                  <th class="p-3 border">Created At</th>
                  <th class="p-3 border">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $serial = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                  <tr class="bg-gray-50 border-b">
                    <td class="p-2"><?= $serial++ ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['name']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['email']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['phone']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['service']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['budget']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['country']) ?></td>
                    <td class="p-2"><?= htmlspecialchars($row['message']) ?></td>
                    <td class="p-2"><?= date("d M Y, h:i A", strtotime($row['created_at'])) ?></td>
                    <td class="p-2">
                      <a href="edit_contact.php?id=<?= $row['id'] ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Edit</a>
                      <a href="delete_contact.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Delete</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-gray-600">No contact submissions found.</p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>

  <footer class="bg-[#1f3c2f] text-white py-6 text-center mt-auto">
    <p>&copy; 2024 <span class="text-yellow-400">Olivia</span>. All rights reserved.</p>
  </footer>
</body>
</html>
