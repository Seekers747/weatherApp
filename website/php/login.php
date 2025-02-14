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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/form.css">
        <link rel="stylesheet" href="../css/notification.css">
    </head>
    <body>
        <form id="loginform" method="POST" class="container my-2">
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
        <script>
            setTimeout(function() {
                var notification = document.querySelector('.notification-error');
                if (notification) {
                    notification.remove();
                }
            }, 3000);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
