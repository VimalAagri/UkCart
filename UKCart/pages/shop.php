<?php
session_start();
include '../includes/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" href="../logo.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <link href="./css_files/index.css" rel="stylesheet">
  

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


<nav class="navbar navbar-dark" style="background-color: black">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap">

    <!-- Search Form -->
    <form class="d-flex me-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>

    <!-- Category Buttons -->
    <div class="d-flex flex-wrap gap-2">
      <a href="#Food Items" class="btn btn-outline-info btn-sm">Food Items</a>
      <a href="#Fruits" class="btn btn-outline-info btn-sm">Fruits</a>
      <a href="#Pulses" class="btn btn-outline-info btn-sm">Pulses</a>
      <a href="#Clothes" class="btn btn-outline-info btn-sm">Clothes</a>
      <a href="#Jewelleries" class="btn btn-outline-info btn-sm">Jewelleries</a>
      <a href="#Mandir Parsaad" class="btn btn-outline-info btn-sm">Mandir Parsaad</a>
      <a href="#Handicrafts" class="btn btn-outline-info btn-sm">Handicrafts</a>
      <a href="#Plants" class="btn btn-outline-info btn-sm">Plants</a>
    </div>

  </div>

</nav>

<script>
    function addToCart(productId, productName, productPrice, productImage) {
        const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

        if (!isLoggedIn) {
            alert("Please login first to buy a product.");
            window.location.href = "login.php"; // login page ka actual path
            return;
        }

        const cartItem = {
            id: productId,
            name: productName,
            price: productPrice,
            image: productImage
        };

        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(cartItem);
        localStorage.setItem('cart', JSON.stringify(cart));
        alert("Product added to cart!");
    }
</script>


<!-- Clothes -->
<?php
$sql = "SELECT * FROM clothes";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Uttarakhand Styles</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/clothes/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/clothes/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Food Items -->
<?php
$sql = "SELECT * FROM food_items";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Food Items</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/food items/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/food items/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Fruits -->
<?php
$sql = "SELECT * FROM fruits";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Fruits</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/fruits/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/fruits/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Handicrafts -->
<?php
$sql = "SELECT * FROM handicrafts";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Handicrafts</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/handicrafts/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/handicrafts/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>


<!-- Jewellery -->
<?php
$sql = "SELECT * FROM jewellery";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Jewellery</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/jewellery/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/jewellery/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Plants -->
<?php
$sql = "SELECT * FROM plants";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Plants</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/plants/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/plants/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Pulses -->
<?php
$sql = "SELECT * FROM pulses";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Pulses</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/pulses/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/pulses/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Temples -->
<?php
$sql = "SELECT * FROM temples";
$result = mysqli_query($conn, $sql);
?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Tample's Parsad</h2>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-100">
        <img src="../images/temples/<?= $row['product_image'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 200px; object-fit: cover;">

          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="text-success fw-bold">₹<?= $row['product_price'] ?></p>
            <p class="card-text" style="font-size: 0.9rem;"><?= $row['product_description'] ?></p>
            <a href="../pages/cart.php" class="btn btn-sm btn-primary"
               onclick="addToCart('<?= $row['product_name'] ?>', <?= $row['product_price'] ?>, './images/temples/<?= $row['product_image'] ?>')">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>