<!-- post-job.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Post a New Job</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
            <a class="nav-link " href="dashboardhire.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="postjob.php">Post a Job</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container mt-5">
  <h2>Post a New Job</h2>
  <form action="postjobdb.php" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Job Title</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Job Description</label>
      <textarea class="form-control" name="description" rows="5" required></textarea>
    </div>
    <div class="mb-3">
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control" name="location" required>
    </div>
    <div class="mb-3">
      <label for="salary" class="form-label">Salary</label>
      <input type="text" class="form-control" name="salary">
    </div>
    <button type="submit" class="btn btn-primary">Post Job</button>
    <a href="dashboardhire.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>
