<?php
require_once __DIR__ . '/../config.php';

$sql = "SELECT * FROM tools ORDER BY id ASC";
$result = $conn->query($sql);

$tools = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tools[] = $row;
    }
}

echo json_encode($tools);
?>
