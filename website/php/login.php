<?php
require "../../data/user.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $User->loginUser($email, $password);

    if ($result === false) {
        echo "<div class='notification-error'><h2 class='notification-text-error'>Email or password incorrect!</h2></div>";
    } else {
        if (isset($_SESSION['userId'])) {
            echo "<div class='notification-pass'>
                    <h2 class='notification-text-pass'>You will be redirected in 5 seconds!</h2>
                  </div>";
            header("Refresh:5; url=home.php");
        } else {
            var_dump("userId not found in session.");
        }
    }
}
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <div class="navbar">
      <div class="logo"><a href="#">GetterWeather</a></div>
      <ul class="links" style="margin-left: 0; padding-left: 0;">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div>
        <input type="checkbox" id="darkmode-toggle">
        <label class="darkmode-label" for="darkmode-toggle">
      </div>
      <div class="burger" onclick="toggleBurgerMenu()">
        <i class="fas fa-solid fa-bars"></i>
      </div>
    </div>

    <div class="burger-menu">
      <ul class="links">
        <li><a href="#">Home</a></li><hr>
        <li><a href="#">About</a></li><hr>
        <li><a href="#">Contact</a></li><hr>
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

        <form id="loginform" method="POST" class="container my-2">
            <div>
                <input type="checkbox" id="darkmode-toggle">
                <label class="darkmode-label" for="darkmode-toggle">
            </div>
            <h2>Login</h2>
            <div class="row mb-3 justify-content-center">
                <div class="col-md-5">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="user@example.com" required>
                </div>

                <div class="col-md-5">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="***********" minlength="8" maxlength="20" required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-styling" style="width: 300px;">login</button>
            </div>
        </form>
        <script src="../js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
