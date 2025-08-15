<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueCars</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons & CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <!-- Add Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">

</head>
<body class="body">
  <header class="header navbar navbar-expand-md bg-black fixed-top px-5 py-1">  
      <!-- Brand -->
      <a class="nav-logo navbar-brand col-lg-2  col-sm-2 m-2" href="#">
        <img src="assets/img/icon-imgs/nav-logo.png" alt="TrueCars Logo" class="nav-img">
      </a>
    <div class="container">                
        <!-- Left: nav links -->
        <ul id="navBarNav" class="navbar-nav me-auto px-3 gap-3 d-flex">
          <li class="nav-item"><a class="nav-link text-white mobile-nav-active" href="#hero">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">New/Used</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>          
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Electric</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Research</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
                      
        <!-- Center: search bar -->
      <!-- <div class="row d-flex"> -->
        <form class="d-flex nav-search-bar">
          <div class="search-container col-lg-8 ">
            <i class="bi bi-search"></i>
            <input class="form-control nav-search col-md-8" type="search" placeholder="Search" aria-label="Search">
          </div>
        </form>
        <!-- Right: signup -->
        <div class="signup ms-4 px-1">
          <!-- <h2 class="fs-2rem text-white">|</h2> -->
          <span class="text-white">Sign Up</span>
          <i class="bi bi-person-circle" style="color: white;"></i>
        </div>      
      </div>
    </div>
  </header>
  <br>
  <main class="main">

    <!-- Hero Section  -->
    <section id="hero" class="hero-section">
      <div id="carouselExampleIndicators" class="carousel slide hero-carousel" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="50">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100"></button>
        </div>
    
        <div class="carousel-inner" data-bs-ride="carousel" data-aos="fade-in" data-aos-delay="50">
          <div class="carousel-item active">
            <img src="assets/img/hero/hero-image1.jpg" alt="Luxury car model display">
          </div>
          <div class="carousel-item">
            <img src="assets/img/hero/hero-image2.jpg" alt="Modern sports car on the road">
          </div>
          <div class="carousel-item">
            <img src="assets/img/hero/hero-image4.jpg" alt="Classic car under sunlight">
          </div>
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
    
        <!-- Hero content overlay -->
        <div class="hero-content">
          <h1 class="hero-title" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="150">Car buying<br>Shaped to your life</h1>
          <br>
          <!-- Center: search bar -->
          <div class="container text-center" data-aos="fade-up" data-aos-delay="200">
            <form class="d-inline-block">
              <div class="hero-search">
                <div class="search-container">
                  <i class="bi bi-search"></i>
                  <input class="form-control nav-search" type="search" placeholder="Search, make, model or type" aria-label="Search">
                </div>
              </div>
            </form>
          </div>
          <br>
          <!-- <p>Your one-stop solution for all car-related services.</p> -->
          <div class="row gap-3 justify-content-center py-3" data-aos="fade-up" data-aos-delay="200">              
            <br>
            <div class="card card-gradient align-items-center" style="width: 9rem;">
              <div class="card-body">
                <div class="icon">
                  <i class="bi bi-car-front-fill" style="color:orange;" aria-hidden="true"></i>
                </div>
                <span class="hero-link text-start">
                  <span class="text-white card-text" style="font-size: 12px;">Shop New</span>
                  <i href="#" class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>  
              </div>
            </div>
            <div class="card card-gradient2 align-items-center" style="width: 9rem;">
              <div class="card-body">
                <div class="icon">
                  <i class="bi bi-car-front-fill" style="color: red;" aria-hidden="true" style="background-color: white;"></i>
                </div>
                <span class="hero-link text-start">
                  <span class="text-white card-text" style="font-size: 12px;">Shop Used</span>
                  <i href="#" class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>  
              </div>
            </div>
            <div class="card card-gradient3 align-items-center" style="width: 9rem;">
              <div class="card-body">
                <div class="icon">
                  <i class="bi bi-car-front-fill" style="color: green" aria-hidden="true"></i>
                </div>
                <span class="hero-link text-start">
                  <span class="text-white card-text" style="font-size: 12px;">Shop Electric</span>
                  <i href="#" class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>                  
              </div>
            </div>              
          </div>
        </div>
      </div>
    </section>

    <!-- New/Form Section -->
    <section class="brand-section">
      <div class="row w-100 gap-0 col-12">
        <div class="col-12 col-md-6 col-sm-5">
          <div class="card side-card py-0 px-2">
            <h2><span class="badge form-badge small-badge">NEW</span><br>Knowing your buying power</h2>
            <p class="fs-10">How much car can you afford, then see vehicles that match your budget</p>
            <img src="assets/img/cars/car2.jpg" alt="Car image">
          </div>
        </div>
        <div class="col-12 col-md-6 col-sm-5">
          <div class="card bg-white new-card">
            <div class="container gap-2" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">                  
                  <div class="card-body text-center" data-aos="fade-in" data-aos-delay="150">
                    <h1 data-bs-slide="27,746">$ <span class="card-h1">27,746</span></h1>
                    <h5>Est. buying power </h5>
                    <p>Based on 7.85% APR</p>
                  </div>
                  <form class=" bg-white row px-2 text-center">
                    <div class="row col gx-3">
                      <div class="col-6">
                        <select class="form-select form-select-lg mb-3" aria-label="">                            
                          <option class="form-option" selected>New car</option>
                          <option class="form-option" value="1">Used car</option>
                        </select>
                      </div>
                      <div class="form-floating col-6">                                         
                        <input type="text" class="form-control form-option" id="floatingInputValue" placeholder="" value="$3,000">
                        <label for="floatingInputValue">Looking for</label>
                      </div>
                    </div>
                  </form>
                </div>
                <br>
                <div class="row gy-4">
                  <form class="bg-white row px-2 text-center">
                    <div class="row col gx-3">
                      <div class="col-6">
                        <select class="form-select form-select-lg mb-3" aria-label="">
                          <option class="form-option" selected>Excellent(800+)</option>
                          <option class="form-option" value="1">Very Good(740-799)</option>
                          <option class="form-option" value="2">Good(670-739)</option>
                          <option class="form-option" value="3">Fair(580-699)</option>
                          <option class="form-option" value="4">Poor(300-579)</option>
                        </select>
                      </div>
                      <div class="form-floating col-6">
                        <input type="email" class="form-control form-option" id="floatingInputValue" placeholder="name@example.com" value="$500">
                        <label for="floatingInputValue">Monthly payment</label>
                      </div>
                    </div>
                  
                    <!-- Switch -->
                    <div class="form-check form-switch text-start mt-3 mx-3">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
                      <label class="form-check-label mx-2" for="switchCheckChecked">Include trade-in</label>
                    </div>
                  
                    <!-- Collapsible content -->
                    <div class="collapse show mt-2" id="tradeInContent">
                      <!-- <div class="card card-body"> -->
                        <div class="form-floating col-12">                                         
                        <input type="text" class="form-control form-option" id="floatingInputValue" value="$0">
                        <label for="floatingInputValue">Trade-in amount</label>
                      </div>
                      <!-- </div> -->
                       <br>
                       <br>
                    <a href="#" class="btn btn-tool bg-black text-white col-12 col-md-12 col-sm-12 form-btn">See your matches</a>
                    </div>
                    
                  </form>
                </div>
              </div>
            <div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Featured Tools Section -->
    <section id="tools" class="section py-5">
      <div class="container col-12">
        <div class="justify-content-center">
          <h1 class="text-center">Featured tools</h1>
        </div>
        <br>
        <div class="row g-3 p-2 ">
          <!-- Card 1 -->
          <div class="col-lg-6 col-md-5 col-sm-12">
            <div class="card mb-2 py-5 text-center tool-card">
              <div class="card-body mx-4">
                <div class="container">
                  <img src="assets/img/cars/car2.jpg" alt="Hero" class="bg-white img-tools-top c-img p-3">
                </div>                  
                <h4 class="card-title text-center">Find your fit</h4>
                <p class="text-center">Not sure what you want? Answer a few questions to find what fits you best.</p>
                <a href="#" class="btn btn-tool col-6">Start Quiz</a>
              </div>
            </div>
          </div>                  
          <!-- Card 2 -->
          <div class="col-lg-6 col-md-5 col-sm-12">
            <div class="card mb-2 py-5 text-center tool-card">
              <div class="card-body mx-4">
                <div class="container">
                  <img src="assets/img/extra-imgs/budget2.jpg" alt="Hero" class="bg-white img-tools-top c-img">
                </div>
                <br>
                <h4 class="card-title text-center">Shop by budget</h4>
                <p class="text-center tool-cards-text text-light-emphasis">Save time and narrow down cars that fit your monthly payment and price point.</p>
                <a href="#" class="btn btn-tool col-8 col-md-12 col-sm-12">See your buying power</a>
              </div>
            </div>
          </div>          
        </div>
        <div class="row g-3">
          <!-- Card 3 -->
          <div class="col-lg-6 col-md-5 col-sm-12">
            <div class="card mb-2 py-5 text-center tool-card">
              <div class="card-body mx-4">
                <div class="container">
                  <img src="assets/img/extra-imgs/car4.jpg" alt="Hero" class="bg-white img-tools-top c-img p-3">
                </div>
                <br>
                <h4 class="card-title text-center">Build your car</h4>
                <p class="text-center">Choose your make, model, trim and add accessories, then we'll connect you with a certified dealer to get you behind the wheel.</p><br>
                <a href="#" class="btn btn-tool col-3 col-md-10 col-sm-12">Build your car</a>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-lg-6 col-md-5 col-sm-12">
            <div class="card mb-2 py-5 text-center tool-card">
              <div class="card-body mx-4">
                <div class="container">
                  <img src="assets/img/extra-imgs/exchanging-keys.jpg" alt="Hero" class="bg-white img-tools-top c-img p-3">
                </div>
                <br>
                <h4 class="card-title text-center">Sell and trade</h4>
                <p class="text-center">Find out quickly how much your current car is worth and get a real cash offer in minutes</p>
                <a href="#" class="btn btn-tool col-5 col-md-12 col-sm-6">Get my free estimate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Why TruCar Section -->
    <section id="services" class="section mb-0">
      <div class="container-fluid bg-black py-5">          
        <h1 class="text-center text-white   nt">Why TrueCar?</h1>
        <br>
        <div class="container m-7 center-cards">
          <!-- Added justify-content-center to center the cards -->
          <div class="row gap-3 justify-content-center p-2">

            <div class="card bg-black text-white text-center col-3">
              <div class="card-body col">  
                <img src="assets/img/icon-imgs/trolley.png" class="col-5" alt="trolley log"><br><br>                
                <span class="card-title text-center">Transparent Pricing</span><br>
                <br>
                <span class="card-description text-center">No surprises here. See how much you will pay on cars you like.</span>
              </div>
            </div>
          
            <div class="card bg-black text-white text-center col-3">
              <div class="card-body col">
                <img src="assets/img/icon-imgs/car-icon2.png" class="col-5" alt="trolley log"><br><br>
                <span class="card-title text-center">Minutes, not hours</span><br>
                <br>
                <span class="card-description text-center">Time saving tools to help you find the right car in a snap.</span>
              </div>
            </div>
          
            <div class="card bg-black text-white text-center col-3">
              <div class="card-body">
                <img src="assets/img/icon-imgs/car-toy.png" class="col-5" alt="trolley log"><br><br>
                <span class="card-title text-center">Shop your way</span><br>
                <br>
                <span class="card-description text-center">Your own pace, your own space. Shop online where and when it's convenient for you.</span>
              </div>
            </div><br>
            <br>
            <div class="text-center">
              <a href="" class="btn signup-btn col-lg-3 col-md-3 col-sm-12">Signup</a>
            </div>
          </div>
          <br>                        
        </div>
      </div>
    </section>

    <!-- Shop by Brand Section -->
    <section id="brandSection" class="d-flex flex-column justify-content-center align-items-center text-center brand-section py-5">
      <div class="card brand-main-card d-flex flex-column align-items-center border-0 shadow-sm p-4" style="border-radius: 15px;">

        <!-- Title -->
        <h1 class="text-center brand-section-title mb-4">Shop your favorite brand</h1>

        <!-- Button group -->
        <div class="btn-group mt-3 mb-4" role="group" aria-label="Car type selector">
          <a id="newCars" href="#brandSection" class="btn brand-btn active" onclick="selectCarType('new')" data-bs-toggle="buttons">New Cars</a>
          <a id="usedCars" href="#brandSection" class="btn brand-btn" onclick="selectCarType('used')" data-bs-toggle="buttons">Used Cars</a>
        </div>

        <?php
          include 'db_connect/db-connect.php';

          $stmt = $pdo->query("SELECT * FROM car_images");
          $carBrands = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div id="carBrands" class="row col-12 gap-3 mt-2 justify-content-center">
          <?php
            foreach ($carBrands as $row) {
              echo '<div class="card col-2 text-center brand-card" data-name="' . htmlspecialchars($row['name']) . '">';
              echo '<div class="card-body d-flex justify-content-center align-items-center">';
              echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['name']) . '" class="brand-img">';
              echo '<span class="mx-3 brand-span">' . htmlspecialchars($row['name']) . '</span>';
              echo '</div>';
              echo '</div>';
            }
          ?>
        </div>

        <div class="text-center">
          <a id="seeMore" href="javascript:void(0);" class="btn drop-btn my-4"  role="button" onclick="toggleView()">
            <span>See more
              <i class="bi bi-arrow-down" aria-hidden="true"></i>
            </span>
          </a>
        </div>

        <div class="d-flex flex-column justify-content-center">
          <p class="text-justify brand-text my-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corporis eum quo vel a veritatis officiis itaque, unde ducimus quidem.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid asperiores fuga culpa? <br>Sit perferendis assumenda reprehenderit ullam sed, facilis magni numquam odio alias tempora beatae, eveniet provident quas quo voluptate error dolorem molestiae ducimus unde minima? Laborum eius excepturi eveniet <br>nesciunt assumenda magni tempora alias dicta consequuntur tenetur? Adipisci, nulla?
          </p>
        </div>            
      </div>  
    </section>



  </main>
  <footer class="bg-black text-white text-center py-3">
    <div class="container">
      <p class="mb-0">&copy; 2023 My Website</p>
    </div>
  </footer>

  <?php include("car-brands/car-data.php"); ?>
  <?php include("car-brands/carBrands.php"); ?>

  <script>
    const initialCarsNew = <?php echo json_encode($newCarBrands); ?>;
    const allCarsNew     = <?php echo json_encode($showNewCars); ?>;
    const initialCarsUsed = <?php echo json_encode($usedCarBrands); ?>;
    const allCarsUsed     = <?php echo json_encode($showUsedCars); ?>;

    console.log(initialCarsNew, allCarsNew, initialCarsUsed, allCarsUsed);
  </script>

  <!-- Bootstrap JS Bundle -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS files -->
  <script src="assets/js/tradein.js"></script>
  <script src="assets/js/navbar.js"></script>
  <script src="assets/js/carBrands.js"></script>

</body>
</html>
