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

    <form id="about-block" method="POST" class="container my-2">
        <h2>Over SkySync</h2>
        <p>Welkom bij <strong>SkySync</strong>, de ultieme weer-app voor al je weersvoorspellingen en actuele updates! Onze missie is om gebruikers nauwkeurige en realtime weersinformatie te bieden via een gebruiksvriendelijke interface.</p>

        <h2>Wat doet SkySync?</h2>
        <p>SkySync biedt gedetailleerde weersvoorspellingen voor tot wel 9 dagen vooruit. Of je nu onderweg bent, thuisblijft, of plannen maakt voor het weekend, SkySync geeft je de juiste informatie zodat je altijd voorbereid bent op het weer.</p>

        <h2>Onze Kenmerken</h2>
        <p>Realtijd weersinformatie en waarschuwingen</p>
        <p>Gedetailleerde 9-daagse weersvoorspelling</p>
        <p>Gebruiksvriendelijke interface en gemakkelijke navigatie</p>
        <p>Weersinformatie op basis van jouw locatie</p>

        <h2>Waarom SkySync?</h2>
        <p>SkySync is meer dan alleen een weer-app; het is een betrouwbare metgezel voor je dagelijkse planning. Wij geloven in het bieden van zowel snelheid als nauwkeurigheid, zodat je altijd goed voorbereid bent, ongeacht de weersomstandigheden.</p>

        <h2>Onze Toekomst</h2>
        <p>We blijven werken aan verbeteringen en nieuwe functies voor SkySync, zoals het toevoegen van gepersonaliseerde waarschuwingen en uitgebreide weersgrafieken. We willen dat SkySync jouw go-to app wordt voor alles wat met het weer te maken heeft!</p>

        <h2>Contacteer ons</h2>
        <p>Heb je feedback, suggesties of vragen? Neem gerust contact met ons op via onze <a href="/contact">contactpagina</a>.</p>
    </form>

    <div class="lower-nav">
        <p>&copy; 2025 SkySync. Alle rechten voorbehouden.</p>
    </div>

    <script src="../js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
