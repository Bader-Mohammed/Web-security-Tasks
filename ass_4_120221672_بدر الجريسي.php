<?php
session_start();

if (!isset($_SESSION['role'])) {
    die("Access Denied");
}

$type = $_GET['type'] ?? '';

if ($type === 'admin' && $_SESSION['role'] !== 'admin') {
    die("Unauthorized Access");
}

if ($type === 'user') {
    echo "User Report";
} elseif ($type === 'admin') {
    echo "Admin Report";
} else {
    echo "Invalid Report Type";
}
?>
