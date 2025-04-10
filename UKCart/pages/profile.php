<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['user_number'])) {
    header("Location: login.php");
    exit();
}

$number = $_SESSION['user_number'];
$success = "";
$error = "";

// Get user data
$stmt = $conn->prepare("SELECT * FROM users WHERE number = ?");
$stmt->bind_param("s", $number);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Update logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = trim($_POST['password']);
    $newAddress = trim($_POST['address']);

    $updateStmt = $conn->prepare("UPDATE users SET password = ?, address = ? WHERE number = ?");
    $updateStmt->bind_param("sss", $newPassword, $newAddress, $number);

    if ($updateStmt->execute()) {
        $success = "✅ Profile updated successfully!";
        // Refresh updated user data
        $user['password'] = $newPassword;
        $user['address'] = $newAddress;
    } else {
        $error = "❌ Update failed: " . $updateStmt->error;
    }

    $updateStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
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
  <div class="card mx-auto" style="max-width: 600px;">
    <div class="card-body">
      <h3 class="card-title text-center">👤 User Profile</h3>

      <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>
      <?php if ($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>

      <p><strong>📱 Phone:</strong> <?= htmlspecialchars($user['number']) ?></p>
      <p><strong>👤 Name:</strong> <?= htmlspecialchars($user['name']) ?></p>
      <p><strong>📧 Email:</strong> <?= htmlspecialchars($user['email']) ?></p>

      <!-- Editable Fields -->
      <form method="POST">
        <div class="mb-3">
          <label for="password" class="form-label">🔐 Password</label>
          <input type="text" name="password" id="password" class="form-control" value="<?= htmlspecialchars($user['password']) ?>" required>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">🏠 Address</label>
          <textarea name="address" id="address" class="form-control" required><?= htmlspecialchars($user['address']) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">💾 Save Changes</button>
      </form>

      <a href="../index.php" class="btn btn-danger mt-3">🚪 Logout</a>
    </div>
  </div>
</div>
</body>
</html>
