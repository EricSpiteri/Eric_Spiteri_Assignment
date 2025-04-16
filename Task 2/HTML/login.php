<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

<!--Header-->
<header>

<div class="topBanner">
        <div class="title">
        <h1 style="margin-left: 50px; padding-top: 10px;" tabindex="1">Login</h1>
        </div>
</div>

</header>

<main>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php" tabindex="2">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Availabilities.php"tabindex="3">Browse Availabilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="4">Your Bookings</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="5">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="./Contact.php" tabindex="6">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./FAQ.php" tabindex="7">Frequently Asked Questions</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" tabindex="7">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

    <br>
    <br>

    <!--Login Box-->
    <div class="loginBox">
    <div class="container">
        
        <form action="POST">
            <h1>Login</h1>
            <br>
            
            <input type="text" class="form-control" id="email" name="email"  placeholder="Email Address" required tabindex="8">
            <br>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required tabindex="9">

            <input type="checkbox" id="rememberMe?" name="rememberMe?" checked>
            <label for="rememberMe?" tabindex="10">Remember Me?</label>

            <br>
            <br>
            <a href="./Register.php" tabindex="11">Don't have an account? Create one</a>
            
            <br>
            <br>

            
            <input type="submit" value="Login" tabindex="12">

        
        </form>
        </div>
    </div>

    </main>

    <br>
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

<script src= "../Bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>