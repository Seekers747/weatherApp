<?php

  require "../../data/user.php";

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    try {
      if (!isset($_GET['city']) || empty($_GET['city'])) {
        echo "<div class='notification-error'>
                <h2 class='notification-text-error'>The search field is empty!</h2>
              </div>";
      } else {
        header("Location: city.php?city=". $_GET['city']);
      }
    } catch (\Exception $e) {
      echo "<p class='text-danger'>An error has occurred: ". $e->getMessage(). "</p>";
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form id="searchForm" method="GET">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Amsterdam" name="city">
        <button type="submit" class="btn btn-primary">Search</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>