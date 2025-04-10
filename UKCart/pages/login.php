<?php
session_start();
include '../includes/db.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = trim($_POST['number']);
    $password = trim($_POST['password']); // no password_verify

    $stmt = $conn->prepare("SELECT * FROM users WHERE number = ? AND password = ?");
    $stmt->bind_param("ss", $number, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_number'] = $user['number'];
        header("Location: profile.php");
        exit();
    } else {
        $error = "❌ Invalid credentials.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
  <div class="card mx-auto" style="max-width: 400px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">🔐 User Login</h3>

      <?php if ($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>

      <form method="POST">
        <div class="mb-3"><label>Phone Number</label><input type="text" name="number" class="form-control" required></div>
        <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

      <p class="text-center mt-3">New User? <a href="registration.php">Register here</a></p>
    </div>
  </div>
</div>
</body>
</html>
