<?php
session_start();

// Set hardcoded admin credentials
$admin_user = "admin";
$admin_pass = "admin123";  // You can encrypt this in real apps

if ($_POST['username'] === $admin_user && $_POST['password'] === $admin_pass) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin_dashboard.php");
    exit;
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='admin_login.php';</script>";
}
?>
