<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--Links to two stylesheets, one of them bootstrap -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    
</head>
<body>
  
    
     <!--Top Banner-->
    <header>
<div class="topBanner">
        <div class="title">
        <h1 style="margin-left: 50px; padding-top: 10px;">Welcome to Booking</h1>
        </div>

        <div class="loginButton">
        <a href="HTML/login.php">
        <h2>Login</h2>
        </a>
        </div>
    </div>
    
    <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="HTML/Availabilities.php">Browse Availabilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Your Bookings</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="/HTML/Contact.php">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/HTML/FAQ.php">Frequently Asked Questions</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
    </header>

<main>
    <!-- Carousel with images plus introduction -->
    <div style="background-color: #373737; margin-top: 10px;" class="container-fluid">
      <div class="row">
      <div class="col-8">
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 600px; object-fit: cover;" src="Images/homeImage1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 600px; object-fit: cover;" src="Images/homeImage2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 600px; object-fit: cover;" src="Images/homeImage3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>


</div>

<!--Introduction Information-->

<div style="color: white; font-size: x-large; text-align: center; margin-top: 10px; " class="col-4">
    <h2>Welcome to Booking!</h2>
    <br>
    <br>
    
    <article>
    <p>Discover Your Next Adventure with Booking
    Plan, book, and experience unforgettable travel moments with ease! Whether you're dreaming of a luxury getaway
    , a family vacation, or a spontaneous weekend escape,
    Booking has you covered.</p>
    </article>


    <div class="container-fluid">
    <div class="row">

      <div class="col">

      <div class="row">
      <img style="width: 160px;height:90px;" src="Images/Malta.avif" alt="Malta">
      </div>
      <div class="row">
      <img style = "width: 160px; height:90px;" src="Images/Rome.avif" alt="Rome">
      </div>

      </div>

      <div class="col">

      <div class="row">
      <img style="width: 160px; height:90px;" src="Images/Belgrade.jpeg" alt="Belgrade">
      </div>
      <div class="row">
      <img style="width: 160px; height:90px;" src="Images/Stockholm.jpg" alt="Stockholm">
      </div>
      
      </div>

      
  </div>
  </div>
  </div>
  </div>
  </div>

  <br>
  <br>
  <br>
  
  <!--BookingMenu-->
  <div class="container">
    <div class="BookingMenu">
      <div class="row">
        <div class="col-5">
        <input type="text" placeholder="Where do you want to go?">
        </div>


      <div class="col-3">
      <input type="text" placeholder="Where do you want to go?">
      </div>

      <div class="col-2">
      <input type="text" placeholder="Where do you want to go?">
      </div>

      <div class="col-1">
      <input type="text" placeholder="Search">
      </div>


    </div>
  </div>
  </main>

  <br>
  <br>

  
<!--Footer-->
  <footer>

  <div class="row">
    <div class="col-3">
     <p>87,<br> Triq Herbert Damarco,<br> Santa Lucija,<br> Malta</p>
    </div>

  </div>

  <hr>

  <div class="row">

  <p2>Booking is part of Booking Holdings Inc., the world leader in online travel and related services.<br>
  Copyright © 1996–2024 Booking™. All rights reserved.</p2>
  
  </div>

  </footer>



  



    
    <script src= "Bootstrap/js/bootstrap.bundle.min.js"></script>




</body>
</html>

