<?php
session_start();
require_once __DIR__ . '/../config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM tools WHERE id=$id");

header("Location: tools_manage.php");
exit;
?>
