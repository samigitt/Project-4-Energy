<?php 
require("php/functies.php"); 
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="One-Up">
  <meta name="author" content="Jesca Wiegers">
  <meta name="keywords" content="">
  <link href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/master.css">
  <link rel="stylesheet" type="text/css" href="css/artiesten.css">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header(); ?>

  <main class="container">

    <div class="extra-container">

      <h1 class="pagina-titel">Artiesten Overzicht</h1>

      <div class="sorteren-filteren-zoeken-container">
        <div class="sorteren-filteren-container">
          <div class="sorteren">
            <p>Sorteer op</p>
            <p>Naam</p>
            <img src="images/evenementen/down-arrow-icon.png" alt="">
          </div>

          <div class="filteren">
            <p>Filter op</p>
            <p>Genre</p>
            <img src="images/evenementen/down-arrow-icon.png" alt="">
          </div>
        </div>

        <div class="zoeken">
          <p>Zoeken</p>
          <div class="blank"></div>
          <img src="images/artiesten/search-icon.png" alt="">
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-1-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Arctic Monkeys</h1>
          <h2 class="artist-container__info-genre">Indierock</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Lowlands</p>
          </div>
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-2-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Beartooth</h1>
          <h2 class="artist-container__info-genre">Metal</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Graspop Metal Meeting</p>
          </div>
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-3-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Bring Me The Horizon</h1>
          <h2 class="artist-container__info-genre">Metalcore</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Lowlands</p>
          </div>
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-4-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Dubfire</h1>
          <h2 class="artist-container__info-genre">Techno</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Dance Valley Festival</p>
          </div>
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-5-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Korn</h1>
          <h2 class="artist-container__info-genre">NU Metal</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Graspop Metal Meeting</p>
          </div>
        </div>
      </div>

      <div class="artist-container">
        <img src="images/artiesten/artiest-6-small.png" alt="">
        <div class="artist-container__info">
          <h1 class="artist-container__info-title">Paul van Dyk</h1>
          <h2 class="artist-container__info-genre">Trance</h2>
          <div class="artist-container__info-location">
            <img class="artist-container__info-img" src="images/artiesten/marker-icon.png" alt="">
            <div class="extra-padding"></div>
            <p>Dance Valley Festival</p>
          </div>
        </div>
      </div>

    </div>

  </main>

  <?php get_footer(); ?>

</body>
</html>
