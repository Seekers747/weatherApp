<?php

require "../../data/user.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
      $isError = false;
      $email = $_POST['email'];
      $password = $_POST['password'];

      if ($User->validateEmail($email)) {
          echo "<div class='notification-error'>
                  <h2 class='notification-text-error'>This email is already in use!</h2>
                </div>";
          $isError = true;
      }

      if (!$User->validatePassword($password)) {
          echo "<div class='notification-error'>
                  <h2 class='notification-text-error'>Password does not meet the requirements!</h2>
                  <h4 class='notification-text-error'>The password must contain 1 uppercase, 1 number and 1 special charachter!</h4>
                </div>";
          $isError = true;
      }

      if (!$isError) {
        $User->registerUser($email, $password);
        echo "<div class='notification-pass'>
                <h2 class='notification-text-pass'>Registration is done!</h2>
                <h4 class='notification-text-pass'>You will be send to login in 5 seconds.</h4>
              </div>";
        header("Refresh:5; url=login.php");
      }
  } catch (\Exception $e) {
      echo "<p class='text-danger'>An error has occurred: " . $e->getMessage() . "</p>";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/notification.css">
  </head>
  <body>
    <form id="inloggegevensform" method="POST" class="container my-2">
      <h2>Inloggen</h2>
      <div class="row mb-3 justify-content-center">
        <div class="col-md-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="user@example.com" required>
        </div>
        <div class="col-md-5">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="***********" minlength="8" maxlength="20" required>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-light" style="width: 300px;">Registreer</button>
      </div>
    </form>
    <script>
      setTimeout(function() {
        var notification = document.querySelector('.notification-error');
        if (notification) {
          notification.remove();
        }
      }, 5000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>