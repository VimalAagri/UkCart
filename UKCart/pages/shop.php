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
  <div class="container">
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
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="./pages/shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
      </ul>
    </div>
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


<!-- Clothes -->
<div id="#Food Items" class="container py-5">
  <h2 class="mb-4 ">Uttarakhand Dresses</h2>
  <div class="row g-4">

    <!-- Product 1 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
        <img src="../images/clothes/clothes1.webp"  class="card-img-top" alt="Product 1">
        <div class="card-body">
          <h6 class="card-title">Pichhora</h6>
          <p class="text-success fw-bold">₹299</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes2.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <h6 class="card-title">Uttarakhand Dress</h6>
          <p class="text-success fw-bold">₹799</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes3.jpg" class="card-img-top" alt="Product 3">
        <div class="card-body">
          <h6 class="card-title">Traditional Shawl</h6>
          <p class="text-success fw-bold">₹999</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes4.jpg" class="card-img-top" alt="Product 4">
        <div class="card-body">
          <h6 class="card-title">Organic Pulses</h6>
          <p class="text-success fw-bold">₹129</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes5.jpg" class="card-img-top" alt="Product 5">
        <div class="card-body">
          <h6 class="card-title">Decorative Art</h6>
          <p class="text-success fw-bold">₹459</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes6.webp" class="card-img-top" alt="Product 6">
        <div class="card-body">
          <h6 class="card-title">Jute Bag</h6>
          <p class="text-success fw-bold">₹349</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes7.jpg" class="card-img-top" alt="Product 7">
        <div class="card-body">
          <h6 class="card-title">Woolen Socks</h6>
          <p class="text-success fw-bold">₹149</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="../images/clothes/clothes8.jpg" class="card-img-top" alt="Product 8">
        <div class="card-body">
          <h6 class="card-title">Bamboo Basket</h6>
          <p class="text-success fw-bold">₹279</p>
          <a href="#" class="btn btn-sm btn-success">Buy Now</a>
        </div>
      </div>
    </div>

   


  </div>
</div>



    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> MyStore. All rights reserved.</p>
    </footer>

</body>
</html>




