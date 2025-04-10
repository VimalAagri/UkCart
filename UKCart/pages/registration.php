<?php
include '../includes/db.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = trim($_POST['number']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']); // hashing removed
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);

    $stmt = $conn->prepare("INSERT INTO users (number, name, password, email, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $number, $name, $password, $email, $address);

    if ($stmt->execute()) {
        $success = "✅ Registration successful!";
    } else {
        $error = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../logo.jpg" alt="ukCart Logo" 
           class="rounded shadow" 
           style="height: 50px; width: auto;">
      UkCart
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="../index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="../pages/shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="../pages/cart.php">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="../pages/login.php">Login</a></li>
      </ul>
    </div>
    <a class="btn btn-info ms-5" href="../pages/registration.php">Register</a>
  </div>
</nav>


<div class="container mt-5">
  <h2 class="mb-4 text-center">User Registration</h2>

  <?php if ($success): ?>
    <div class="alert alert-success"><?= $success ?></div>
  <?php elseif ($error): ?>
    <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>

  <form method="POST" action="">
    <div class="mb-3">
      <label for="number" class="form-label">Phone Number *</label>
      <input type="text" class="form-control" id="number" name="number" required>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Full Name *</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password *</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
</body>
</html>
