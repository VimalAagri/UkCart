<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="icon" href="logo.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
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

<div class="container py-5">
  <h2 class="mb-4 text-center">🛒 Your Cart</h2>
  <div id="cartContainer" class="row justify-content-center"></div>
</div>

<script>
  const product = JSON.parse(localStorage.getItem('cartProduct'));
  if (product) {
    document.getElementById('cartContainer').innerHTML = `
      <div class="col-md-6">
        <div class="card">
          <img src=".${product.image}" class="card-img-top" alt="${product.name}">
          <div class="card-body">
            <h5 class="card-title">${product.name}</h5>
            <p class="card-text text-success fw-bold">₹${product.price}</p>
            <a href="#" class="btn btn-success">Proceed to Checkout</a>
          </div>
        </div>
      </div>
    `;
  }
</script>

</body>
</html>