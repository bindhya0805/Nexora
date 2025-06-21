<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4 shadow p-4 bg-white rounded">
        <h4 class="mb-3 text-center">Admin Login</h4>
        <form method="post" action="admin_login_check.php">
          <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn text-light" style="background-color:#1acc8d">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
