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
  <link rel="stylesheet" type="text/css" href="css/producten.css">
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <header class="header">
    <nav>
      <div>
        <a class="burger-menu-icon" onclick="clickBurgerMenu('aan')"><img class="small-icon hover" src="images/master/burger-menu-icon.png" alt=""></a>
        <a class="inloggen-button" href="#">Inloggen</a>
      </div>

      <ul class="burger-menu" id="show-menu">
        <li>
          <a onclick="clickBurgerMenu('uit')"><img class="small-icon hover" src="images/master/cross-icon.png" alt=""></a>
        </li>

        <li><a href="index.html">Home</a><li>

        <li><a href="producten.html">Producten</a><li>

        <li><a href="evenementen.html">Evenementen</a><li>

        <li><a href="artiesten.html">Ariesten</a><li>

        <li><a href="aanbiedingen.html">Aanbiedingen</a><li>

        <li><a href="overons.html">Over Ons</a><li>

        <li><a href="contact.html">Contact</a><li>
      </ul>
    </nav>
    <section class="header-text"><h1>One-Up</h1><h1>Producten</h1></section>
  </header>

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
          <img class="slideshow-image" src="images/producten/placeholder-square-1.png" alt="">
        </div>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/placeholder-square-2.png" alt="">
        </div>
        <div class="mySlides3">
          <img class="slideshow-image" src="images/producten/placeholder-square-3.png" alt="">
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

  <footer>
    <section class="footer-row1 footer-flex">
      <a class="footer-padding">Copyright</a>
      <a class="footer-padding">Disclaimer</a>
    </section>

    <section class="footer-row2 footer-flex">
      <a class="footer-padding-small"><img class="small-icon" src="images/master/facebook.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/instagram.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/twitter.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/tiktok.png" alt=""></a>
    </section>
  </footer>

</body>
</html>
