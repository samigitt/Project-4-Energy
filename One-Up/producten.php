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
  <meta name="author" content="Jesca Wiegers, Danny van Kampen, Erik Knöps, Sami Alouat">
  <meta name="keywords" content="">
  <link href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/master.css">
  <link rel="stylesheet" type="text/css" href="css/producten.css">
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header(); ?>

  <main class="container">
    <section class="container__sterke-tekst">
      <h1 class="pagina-titel">Een sterke tekst</h1>
      <p class="sterke-tekst__p">Een sterke tekst een sterke tekst een sterke tekst een sterke tekst een sterke tekst een sterke tekst
        een sterke tekst een sterke tekst een sterke tekst een sterke tekst een sterke tekst een sterke tekst een sterke tekst.</p>
    </section>

    <section class="container__producten">

      <div class="slideshow-container">
        <button class="slideshow__button slideshow__button--left" onclick="plusSlides(-1, 0)">
          <img src="images/master/left.png">
        </button>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/blikje-blauw.png" alt="">
        </div>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/blikje-geel.png" alt="">
        </div>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/blikje-groen.png" alt="">
        </div>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/blikje-rood.png" alt="">
        </div>
        <button class="slideshow__button slideshow__button--right" onclick="plusSlides(1, 0)">
          <img src="images/master/right.png" alt="">
        </button>
      </div>

      <article class="producten__article">
        <h1>Algemene Ingrediënten One-Up</h1>
        <div class="producten__div padding-h2">
          <img class="producten__img" src="images/producten/exclamation-icon.png" alt="">
          <div class="padding-icon"></div>
          <h2>Let op, niet elk drankje bevat al deze ingrediënten.</h2>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>Cafeïne</p>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>B-vitamines</p>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>Taurine</p>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>L-carnitine</p>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>Guarana-extract</p>
        </div>

        <div class="producten__div padding-p">
          <img class="producten__img" src="images/producten/circle-small-icon.png" alt="">
          <div class="padding-icon"></div>
          <p>Glucuronolacton</p>
        </div>
      </article>
    </section>
  </main>

  <script type="text/javascript" src="js/slideshow__producten.js"></script>

  <?php get_footer(); ?>

</body>
</html>
