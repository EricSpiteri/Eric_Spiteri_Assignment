<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <link rel="stylesheet" href="../CSS/FAQ.css">
    <link rel="stylesheet" href="../Bootstrap/css/Bootstrap.css">
</head>
<body>
    <header>
      <div class="TopBanner">
        <div class ="row">

      <div class="col-10">
        <h1 style="margin-left: 50px; padding-top: 10px;">Frequently Asked</h1>
        </div>
        <div class="col-2">
        <div class="loginButton">
        <a href="login.php">
        <img src="../Images/Icons/ProfileIcon.png" alt="LoginButton" tabindex=1>
        </a>
        </div>
        </div>
        </div>
        </div>
        
        

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
          <a class="nav-link active" aria-current="page" href="Availabilities.php" tabindex="3">Browse Availabilities</a>
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
            <li><a class="dropdown-item" href="/HTML/Contact.php" tabindex="6">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="FAQ.php" tabindex="7">Frequently Asked Questions</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" tabindex="8">
        <button class="btn btn-outline-success" type="submit" tabindex="9">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>

    <br>
    <br>

<!--Questions and answers (p is dropdown)-->
    <section class="faq-container">
        <div class="faq-item">
            <h2 class="faq-question">What is this booking website about?</h2>
            <p class="faq-answer">Our website allows you to easily book hotels, car rentals and experiences. We aim to provide a seamless and stress-free booking experience.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">How do I make a booking?</h2>
            <p class="faq-answer">To make a booking, simply select your destination, choose the service you need (hotel, flight, car rental), and follow the prompts to complete your reservation. You can pay securely online.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">Can I modify or cancel my booking?</h2>
            <p class="faq-answer">Yes, most bookings can be modified or canceled directly from your account. Please refer to the booking terms and conditions for specific policies regarding cancellations or changes.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">Is my payment information secure?</h2>
            <p class="faq-answer">Yes, all payments are processed using SSL encryption to ensure your payment information is secure. We follow industry standards to protect your data.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">Can I book for someone else?</h2>
            <p class="faq-answer">Yes, you can book a service for someone else. Simply enter their details during the booking process, and the reservation will be made in their name.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">How do I know if my booking was successful?</h2>
            <p class="faq-answer">After completing your booking, you will receive a confirmation email with your booking details. You can also view your bookings in your account dashboard.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">What should I do if I have trouble with my booking?</h2>
            <p class="faq-answer">If you encounter any issues, you can contact our support team through the "Contact Us" page. Our team will assist you with any problems related to your booking.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">Can I get a refund for my booking?</h2>
            <p class="faq-answer">Refunds depend on the booking’s terms and conditions. Please refer to the cancellation policy for your specific booking. If eligible, refunds are processed through the same payment method used for booking.</p>
        </div>

        <div class="faq-item">
            <h2 class="faq-question">Are there any booking fees?</h2>
            <p class="faq-answer">Most bookings do not incur additional fees. However, certain services or changes to your reservation may incur booking fees. All applicable fees will be displayed during the booking process.</p>
        </div>
    </section>
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

<script src="../Javascript/FAQ.JS"></script>
<script src= "../Bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>