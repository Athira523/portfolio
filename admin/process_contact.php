<?php
require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $service  = $_POST['service'] ?? '';
    $budget   = $_POST['budget'] ?? '';
    $country  = $_POST['country'] ?? '';
    $message  = $_POST['message'] ?? '';

    $sql = "INSERT INTO contacts (name, email, phone, service, budget, country, message)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $email, $phone, $service, $budget, $country, $message);

    if ($stmt->execute()) {
        header("Location: public/services.php?status=success");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
