<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UkCart</title>
    <link rel="icon" href="logo.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <link href="./css_files/index.css" rel="stylesheet">
  

</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="logo.jpg" alt="ukCart Logo" 
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



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/image1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcom to UkCart</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="./images/image4.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Four slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 
<!-- Product Grid -->
<section class="container-fluid py-5 bg-dark">

<div class="container py-5">
  <h2 class="mb-4 text-center text-white">Featured Products</h2>
  <div class="row g-4">

    <!-- Product 1 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products1.webp" class="card-img-top" alt="Arts">
        <div class="card-body">
          <p class="card-text">Beautiful traditional art pieces from local artisans.</p>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products2.jpg" class="card-img-top" alt="Food Items">
        <div class="card-body">
          <p class="card-text">Organic and homemade food items straight from the hills.</p>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products3.jpg" class="card-img-top" alt="Handicraft">
        <div class="card-body">
          <p class="card-text">Handcrafted treasures made with care and tradition.</p>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products4.jpg" class="card-img-top" alt="Handmade">
        <div class="card-body">
          <p class="card-text">Premium handmade products, crafted by local hands.</p>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products5.jpg" class="card-img-top" alt="Pulses">
        <div class="card-body">
          <p class="card-text">Nutritious pulses sourced from sustainable farms.</p>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products6.jpg" class="card-img-top" alt="Food Items">
        <div class="card-body">
          <p class="card-text">Delicious and healthy parsad.</p>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products7.jpg" class="card-img-top" alt="Handicraft">
        <div class="card-body">
          <p class="card-text">Traditional handicrafts to enrich your home decor.</p>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-3 col-sm-6">
      <div class="card h-100">
        <img src="./images/products-category/products8.webp" class="card-img-top" alt="Handmade">
        <div class="card-body">
          <p class="card-text">Locally sourced handmade goodness at its best.</p>
        </div>
      </div>
    </div>

  </div>
</div>

</section>



<!-- Trending Products -->
<div class="container py-5">
  <h2 class="mb-4 text-center">🔥 Trending Products</h2>
  <div class="row g-4">

    <!-- Product 1 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
        <img src="./images/trending-products/product1.jpg"  class="card-img-top" alt="Product 1">
        <div class="card-body">
          <h6 class="card-title">Pichhora</h6>
          <p class="text-success fw-bold">₹299</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product2.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <h6 class="card-title">Uttarakhand Dress</h6>
          <p class="text-success fw-bold">₹799</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product3.jpg" class="card-img-top" alt="Product 3">
        <div class="card-body">
          <h6 class="card-title">Traditional Shawl</h6>
          <p class="text-success fw-bold">₹999</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product4.webp" class="card-img-top" alt="Product 4">
        <div class="card-body">
          <h6 class="card-title">Organic Pulses</h6>
          <p class="text-success fw-bold">₹129</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product5.webp" class="card-img-top" alt="Product 5">
        <div class="card-body">
          <h6 class="card-title">Decorative Art</h6>
          <p class="text-success fw-bold">₹459</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product6.jpg" class="card-img-top" alt="Product 6">
        <div class="card-body">
          <h6 class="card-title">Jute Bag</h6>
          <p class="text-success fw-bold">₹349</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product7.webp" class="card-img-top" alt="Product 7">
        <div class="card-body">
          <h6 class="card-title">Woolen Socks</h6>
          <p class="text-success fw-bold">₹149</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product8.jpg" class="card-img-top" alt="Product 8">
        <div class="card-body">
          <h6 class="card-title">Bamboo Basket</h6>
          <p class="text-success fw-bold">₹279</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product9.jpg" class="card-img-top" alt="Product 9">
        <div class="card-body">
          <h6 class="card-title">Copper Bottle</h6>
          <p class="text-success fw-bold">₹599</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 10 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product10.jpg" class="card-img-top" alt="Product 10">
        <div class="card-body">
          <h6 class="card-title">Organic Tea</h6>
          <p class="text-success fw-bold">₹199</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>


    <!-- Product 11 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product11.jpg" class="card-img-top" alt="Product 1">
        <div class="card-body">
          <h6 class="card-title">Organic Honey</h6>
          <p class="text-success fw-bold">₹299</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 12 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product12.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <h6 class="card-title">Wooden Handicraft</h6>
          <p class="text-success fw-bold">₹799</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 13 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product13.jpg" class="card-img-top" alt="Product 3">
        <div class="card-body">
          <h6 class="card-title">Traditional Shawl</h6>
          <p class="text-success fw-bold">₹999</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 14 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product14.jpg" class="card-img-top" alt="Product 4">
        <div class="card-body">
          <h6 class="card-title">Organic Pulses</h6>
          <p class="text-success fw-bold">₹129</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 15 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product15.webp" class="card-img-top" alt="Product 5">
        <div class="card-body">
          <h6 class="card-title">Decorative Art</h6>
          <p class="text-success fw-bold">₹459</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 16 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product16.jpg" class="card-img-top" alt="Product 6">
        <div class="card-body">
          <h6 class="card-title">Jute Bag</h6>
          <p class="text-success fw-bold">₹349</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 17 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product17.webp" class="card-img-top" alt="Product 7">
        <div class="card-body">
          <h6 class="card-title">Woolen Socks</h6>
          <p class="text-success fw-bold">₹149</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 18 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product18.jpg" class="card-img-top" alt="Product 8">
        <div class="card-body">
          <h6 class="card-title">Bamboo Basket</h6>
          <p class="text-success fw-bold">₹279</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 19 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product19.jpg" class="card-img-top" alt="Product 9">
        <div class="card-body">
          <h6 class="card-title">Copper Bottle</h6>
          <p class="text-success fw-bold">₹599</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 20 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product20.jpg" class="card-img-top" alt="Product 10">
        <div class="card-body">
          <h6 class="card-title">Organic Tea</h6>
          <p class="text-success fw-bold">₹199</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>


     <!-- Product 21 -->
     <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product21.jpg" class="card-img-top" alt="Product 5">
        <div class="card-body">
          <h6 class="card-title">Decorative Art</h6>
          <p class="text-success fw-bold">₹459</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 22 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product22.webp" class="card-img-top" alt="Product 6">
        <div class="card-body">
          <h6 class="card-title">Jute Bag</h6>
          <p class="text-success fw-bold">₹349</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 23 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product23.jpg" class="card-img-top" alt="Product 7">
        <div class="card-body">
          <h6 class="card-title">Woolen Socks</h6>
          <p class="text-success fw-bold">₹149</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 24 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product24.jpg" class="card-img-top" alt="Product 8">
        <div class="card-body">
          <h6 class="card-title">Bamboo Basket</h6>
          <p class="text-success fw-bold">₹279</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 25 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product25.jpg" class="card-img-top" alt="Product 9">
        <div class="card-body">
          <h6 class="card-title">Copper Bottle</h6>
          <p class="text-success fw-bold">₹599</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 26 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product26.webp" class="card-img-top" alt="Product 10">
        <div class="card-body">
          <h6 class="card-title">Organic Tea</h6>
          <p class="text-success fw-bold">₹199</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>


    <!-- Product 27 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product27.jpeg" class="card-img-top" alt="Product 1">
        <div class="card-body">
          <h6 class="card-title">Organic Honey</h6>
          <p class="text-success fw-bold">₹299</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product 28 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100">
      <img src="./images/trending-products/product28.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <h6 class="card-title">Wooden Handicraft</h6>
          <p class="text-success fw-bold">₹799</p>
          <a href="#" class="btn btn-sm btn-primary">Buy Now</a>
        </div>
      </div>
    </div>



  </div>
</div>

<!-- About Section -->
<section class="py-5 bg-light" id="about">
  <div class="container">
    <div class="row ">
      
      <!-- Image Section -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="logo.jpg" alt="About ukCart" class=" rounded shadow h-50">
      </div>

      <!-- Text Section -->
      <div class="col-md-6">
        <h2 class="mb-3">About <span class="text-primary">ukCart</span></h2>
        <p>
          <strong>ukCart</strong> is your one-stop destination for authentic products from the heart of Uttarakhand.
          We bring you a handpicked collection of organic foods, traditional handicrafts, handmade products, and much more—crafted with love by local artisans and farmers.
        </p>
        <p>
          Our mission is to empower local communities, promote sustainable shopping, and deliver the rich heritage of the hills right to your doorstep. Whether you're in the city or abroad, ukCart bridges the gap between tradition and convenience.
        </p>
        <a href="#products" class="btn btn-primary mt-3">Explore Our Products</a>
      </div>

    </div>
  </div>
</section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> MyStore. All rights reserved.</p>
    </footer>

</body>
</html>
