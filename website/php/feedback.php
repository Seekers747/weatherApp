<?php
require "../../data/user.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];

    if ($User->sendFeedback($username, $rating, $message)) {
        echo "<div class='notification-pass'>
        <h2 class='notification-text-pass'>Thank you for giving us feedback!</h2>
        </div>";
    } else {
        echo "<div class='notification-error'>
        <h2 class='notification-text-error'>There was an error sending your feedback. Please try again later.</h2>
        </div>";
    }
}
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <div class="navbar">
      <div class="logo"><a href="home.php">SkySync</a></div>
      <ul class="links" style="margin-left: 0; padding-left: 0;">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <div style="padding-top: 5px;">
        <input type="checkbox" id="darkmode-toggle">
        <label class="darkmode-label" for="darkmode-toggle"></label>
      </div>
      <div class="burger" onclick="toggleBurgerMenu()">
        <i class="fas fa-solid fa-bars"></i>
      </div>
    </div>
    <div class="lower-nav">
      <a href="contact.php">Contact</a>
      <a href="feedback.php">Feedback</a>
    </div>

    <div class="burger-menu">
      <ul class="links">
        <li><a href="home.php">Home</a></li><hr>
        <li><a href="about.php">About</a></li><hr>
        <li><a href="contact.php">Contact</a></li><hr>
        <li><a href="login.php">Login</a></li><hr>
      </ul>
    </div>

    <div class="clouds set1">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
        <div class="cloud x6"></div>
        <div class="cloud x7"></div>
        <div class="cloud x8"></div>
        <div class="cloud x9"></div>
        <div class="cloud x10"></div>
        <div class="cloud x11"></div>
        <div class="cloud x12"></div>
        <div class="cloud x13"></div>
        <div class="cloud x14"></div>
        <div class="cloud x15"></div>
        <div class="cloud x16"></div>
    </div>

    <div class="clouds set2">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
        <div class="cloud x6"></div>
        <div class="cloud x7"></div>
        <div class="cloud x8"></div>
        <div class="cloud x9"></div>
        <div class="cloud x10"></div>
        <div class="cloud x11"></div>
        <div class="cloud x12"></div>
        <div class="cloud x13"></div>
        <div class="cloud x14"></div>
        <div class="cloud x15"></div>
        <div class="cloud x16"></div>
    </div>

    <form id="contactform" method="POST" class="container my-2">
        <h2>Feedback</h2>
        <div class="row mb-3 justify-content-center">
          <div class="col-md-4">
            <label for="username" class="form-label">Your username:</label>
            <input type="text" class="form-control" name="username" placeholder="user123" required>
          </div>
          <div class="col-md-4">
            <label for="rating" class="form-label">Rating:</label>
            <select class="form-select" name="rating" required>
              <option value="" disabled selected>Select your rating</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
        </div>
        <div class="row mb-3 justify-content-center">
          <div class="col-md-8">
            <label for="message" class="form-label">Your Message:</label>
            <textarea class="form-control" name="message" rows="4" placeholder="Write your message here" required></textarea>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-styling" style="width: 300px;">Send Message</button>
        </div>
    </form>

    <script src="../js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
