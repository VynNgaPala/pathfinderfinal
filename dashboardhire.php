<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'employer') {
    header("Location: loginpage.php");
    exit();
}

require 'connection.php';

$employer_id = $_SESSION['user'];

$sql = "SELECT * FROM jobs WHERE employer_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $employer_id);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Employer Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">pathfinder</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="dashboardhire.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="postjob.php">Post a Job</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-4">
    <h3 class="mb-4">👋 Welcome, Employer!</h3>

    <!-- Post Job Button -->
    <div class="d-flex justify-content-end mb-3">
      <a href="postjob.php" class="btn btn-success">+ Post a New Job</a>
    </div>

    <?php if ($result->num_rows > 0): ?>
      <div class="list-group">
        <?php while ($job = $result->fetch_assoc()): ?>
          <div class="list-group-item">
            <h5><?= htmlspecialchars($job['title']) ?></h5>
            <p><?= nl2br(htmlspecialchars($job['description'])) ?></p>
            <small>Location: <?= htmlspecialchars($job['location']) ?> | Salary: <?= htmlspecialchars($job['salary']) ?> | Posted: <?= htmlspecialchars($job['created_at']) ?></small>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center">
        You haven't posted any jobs yet.
      </div>
    <?php endif; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
