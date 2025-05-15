<?php
include '../connection.php';
session_start();

if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../loginpage.php");

    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pathfinder Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="dashboardadmin.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="manage_users.php">Manage Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_jobs.php">View Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-4">
    <h3 class="mb-4">👑 Welcome, Admin!</h3>

    <div class="row">
      <div class="col-md-6">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Manage Users</h5>
            <p class="card-text">View and manage employer and client accounts.</p>
            <a href="#" class="btn btn-light">Go</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">View Job Posts</h5>
            <p class="card-text">See all job listings posted by employers.</p>
            <a href="#" class="btn btn-light">Go</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
