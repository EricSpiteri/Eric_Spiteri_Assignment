<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../CSS/Contact.css">
    <link rel="stylesheet" href="../Bootstrap/css/Bootstrap.css">
    <meta charset="UTF-8">
</head>
<body>

<div class="contactBackground">
  <img src="../Images/ContactBackground.jpg" alt="Contact Page Background">
</div>



<div class="Content">


<header>
<div class="topBanner">
        <div class="title">
        <h1 style="margin-left: 50px; padding-top: 10px;">Contact Booking</h1>
        </div>
        
        <div class="loginButton">
        <a href="login.php">
        <img src="../Images/Icons/ProfileIcon.png" alt="LoginButton">
        </a>
        </div>
</div>



 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Home</a>
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
            <li><a class="dropdown-item" href="./Contact.php">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./FAQ.php">Frequently Asked Questions</a></li>
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

    <br>
    <br>
    <br>


    
    <!--Contact Form-->
    <div class="ContactForm">
    <div style class="container mt-5">
    <h2>Contact Us</h2>
    <form action="/submit_form" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>


        <div style="margin-right: 700px;" class="mb-3">
          <label for="phoneNumber" class="form-label">Your Mobile Number</label>
          <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
</div>

<br>
<br>
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

    </div>
</body>
</html>