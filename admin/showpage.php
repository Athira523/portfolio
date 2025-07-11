<?php
session_start();
require_once '../includes/config.php';

// Prevent back button after logout
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Only fetch submissions if logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    $sql = "SELECT id, name, email, phone, service, budget, country, message, created_at FROM contacts ORDER BY id DESC";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Submissions - Olivia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Outfit', sans-serif;
      background-color: #f9f9f9;
    }
    .table-container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    thead {
      background-color: #1f3c2f;
      color: white;
    }
    th, td {
      padding: 12px 16px;
      border: 1px solid #ddd;
      font-size: 14px;
    }
    tbody tr:nth-child(even) {
      background-color: #f4f4f4;
    }
    h1 {
      font-size: 28px;
      text-align: center;
      color: #1f3c2f;
      margin-bottom: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="bg-green-900 text-white px-6 py-4 max-w-6xl mx-auto mt-4 rounded-full flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <img src="image/logo.png" alt="Logo" class="h-10 w-10">
      <span class="text-xl font-semibold">Olivia<span class="text-yellow-400">.</span></span>
    </div>
    <nav class="flex items-center space-x-6">
      <a href="index.html" class="hover:text-yellow-400">Home</a>
      <a href="services.html" class="hover:text-yellow-400">Services</a>
      <a href="about.html" class="hover:text-yellow-400">About</a>
      <a href="projects.html" class="hover:text-yellow-400">Projects</a>
      <a href="blogs.html" class="hover:text-yellow-400">Blogs</a>

      <!-- LOGIN or LOGOUT -->
      <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true): ?>
        <span class="text-sm text-yellow-300 ml-2">Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
        <a href="admin_logout.php" class="ml-4 bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded text-sm font-semibold">Logout</a>
      <?php else: ?>
        <a href="admin_login.php" class="ml-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded text-sm font-semibold">Login</a>
      <?php endif; ?>
    </nav>
  </header>

  <!-- Table Content -->
  <div class="table-container">
    <h1>Contact Submissions</h1>

    <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true): ?>
      <?php if ($result && $result->num_rows > 0): ?>
        <div class="overflow-auto">
          <table>
            <thead>
              <tr>
                <th>Sl. No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Service</th>
                <th>Budget</th>
                <th>Country</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $serial = 1; ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?= $serial++ ?></td>
                  <td><?= htmlspecialchars($row['name']) ?></td>
                  <td><?= htmlspecialchars($row['email']) ?></td>
                  <td><?= htmlspecialchars($row['phone']) ?></td>
                  <td><?= htmlspecialchars($row['service']) ?></td>
                  <td><?= htmlspecialchars($row['budget']) ?></td>
                  <td><?= htmlspecialchars($row['country']) ?></td>
                  <td><?= htmlspecialchars($row['message']) ?></td>
                  <td><?= date("d M Y, h:i A", strtotime($row['created_at'])) ?></td>
                  <td>
                    <a href="edit_contact.php?id=<?= $row['id'] ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Edit</a>
                    <a href="delete_contact.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this entry?')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Delete</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <p class="text-center text-gray-600">No contact submissions found.</p>
      <?php endif; ?>
    <?php else: ?>
      <p class="text-center text-red-600 font-semibold mt-10">You must be logged in to view submissions.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
  </div>

  <footer class="mt-12 bg-[#1f3c2f] text-white py-6 text-center">
    <p>&copy; 2024 <span class="text-yellow-400">Olivia</span>. All rights reserved.</p>
  </footer>

  <!-- Prevent back button after logout -->
  <script>
    window.addEventListener('pageshow', function (event) {
      if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
        window.location.href = 'admin_login.php';
      }
    });
  </script>

</body>
</html>
