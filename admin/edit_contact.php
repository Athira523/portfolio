<?php
require_once '../includes/config.php';

if (!isset($_GET['id'])) {
    die("ID not provided.");
}

$id = intval($_GET['id']);
$contact = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update logic
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $budget = $_POST['budget'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("UPDATE contacts SET name=?, email=?, phone=?, service=?, budget=?, country=?, message=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $email, $phone, $service, $budget, $country, $message, $id);

    if ($stmt->execute()) {
        header("Location: showpage.php?status=updated");
        exit();
    } else {
        echo "Update failed: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Fetch contact details
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $contact = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-green-900 mb-4">Edit Contact</h2>
    <?php if ($contact): ?>
      <form method="POST" class="space-y-4">
        <input name="name" value="<?= htmlspecialchars($contact['name']) ?>" class="w-full p-2 border rounded" required />
        <input name="email" value="<?= htmlspecialchars($contact['email']) ?>" class="w-full p-2 border rounded" required />
        <input name="phone" value="<?= htmlspecialchars($contact['phone']) ?>" class="w-full p-2 border rounded" required />
        <input name="service" value="<?= htmlspecialchars($contact['service']) ?>" class="w-full p-2 border rounded" required />
        <input name="budget" value="<?= htmlspecialchars($contact['budget']) ?>" class="w-full p-2 border rounded" required />
        <input name="country" value="<?= htmlspecialchars($contact['country']) ?>" class="w-full p-2 border rounded" required />
        <textarea name="message" class="w-full p-2 border rounded" rows="4" required><?= htmlspecialchars($contact['message']) ?></textarea>
        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Update</button>
      </form>
    <?php else: ?>
      <p class="text-red-600">Contact not found.</p>
    <?php endif; ?>
  </div>
</body>
</html>
