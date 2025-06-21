<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Welcome Admin</h2>
    <p><a href="view_appointments.php" class="btn btn-primary">View Appointments</a></p>
    <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
  </div>
</body>
</html>
