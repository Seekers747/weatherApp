<?php
  // Optionally, you can add any server-side logic for the home page here.
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=block" />
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

    <form id="home-block" method="GET" class="container my-2">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-5 home-top-row">
          <label for="city" class="form-label" style="padding-right: 5px;">Search:</label>
          <input type="text" class="form-control search-input" name="city" placeholder="Amsterdam" required>
          <button class="search-icon-styling search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </div>

      <section class="weather-info">
        <div class="location-date-container">
            <div class="location">
                <div class="location-child">
                    <span class="material-symbols-outlined">
                        location_on
                    </span>
                    <p class="country-txt" id="city-name">Jakarta</p> <!-- Changed to id="city-name" -->
                </div>
                <p class="current-date-txt" id="current-date">Friday, 28 March</p> <!-- id="current-date" -->
            </div>
        </div>
        <div class="weather-summary-container">
            <img src="../../images/assets/weather/clouds.svg" alt="" class="weather-summary-img" id="weather-icon"> <!-- id="weather-icon" -->
            <div class="weather-summary-info">
                <p class="temp-txt" id="temperature">29 °C</p> <!-- id="temperature" -->
                <p class="condition-txt" id="weather-condition">Clouds</p> <!-- id="weather-condition" -->
            </div>
        </div>
        <div class="weather-conditions-container">
            <div class="condition-item">
                <span class="material-symbols-outlined">
                    water_drop
                </span>
                <div class="condition-info">
                    <p style="margin-bottom: 0;">Humidity</p>
                    <p class="humidity-value-txt" id="humidity">55%</p> <!-- id="humidity" -->
                </div>
            </div>

            <div class="condition-item">
                <span class="material-symbols-outlined">
                    air
                </span>
                <div class="condition-info">
                    <p style="margin-bottom: 0;">Wind speed</p>
                    <p class="wind-value-txt" id="wind-speed">2 M/s</p> <!-- id="wind-speed" -->
                </div>
            </div>
        </div>
      </section>
    </form>

    <script src="../js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
