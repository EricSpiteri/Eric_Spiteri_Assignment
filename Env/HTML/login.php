<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/CSS/login.css">
</head>
<body>

     <!--Top Banner-->
     <header>
    <div class="topBanner">

        <div class="title">
        <h1 style="margin-left: 50px; padding-bottom: 20px; font-size: xxx-large;">Login</h1>
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
          <a class="nav-link active" aria-current="page" href="Availabilities.php">Browse Availabilities</a>
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
            <li><a class="dropdown-item" href="FAQ.php">Frequently Asked Questions</a></li>
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

    </header>


    <!--Form to input login details and log-in-->
    <form action="#" method="post">
    <div class="login-box">
    
    <h1>Login</h1>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="#">Forgot Password?</a>
        <a href="#">Create an Account</a>
    </form>
    </div>

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


<script src= "/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>