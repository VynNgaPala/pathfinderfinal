<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'client') {
    header("Location: loginpage.php");
    exit();
}

$sql = "SELECT jobs.*, users.fullname AS employer_name 
        FROM jobs 
        JOIN users ON jobs.employer_id = users.id 
        ORDER BY jobs.created_at DESC";


$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pathfinder</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
  <h3 class="mb-4">📋 Available Jobs</h3>

  <?php if ($result->num_rows > 0): ?>
    <div class="list-group">
      <?php while ($job = $result->fetch_assoc()): ?>
        <div class="list-group-item">
          <h5><?= htmlspecialchars($job['title']) ?></h5>
          <p><?= nl2br(htmlspecialchars($job['description'])) ?></p>
          <small>
            📍 <?= htmlspecialchars($job['location']) ?> |
            💰 <?= htmlspecialchars($job['salary']) ?> |
            🧑‍💼 <?= htmlspecialchars($job['employer_name']) ?> |
            🕒 <?= date("F j, Y", strtotime($job['created_at'])) ?>
          </small>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <div class="alert alert-info text-center">No jobs available at the moment.</div>
  <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
