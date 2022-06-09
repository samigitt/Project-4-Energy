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
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header(); ?>

  <main class="container">

    <div class="slideshow-container">
      <?php
        require('dbconnect.php');
      ?>
      <h1 class="slideshow-title">Huidige Aanbiedingen</h1>
      <button class="slideshow__button slideshow__button--left" onclick="plusSlides(-1, 0)">
        <img src="images/master/left.png">
      </button>
      <div class="mySlides1">
        <?php
          $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id = 1";

          if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
              ?><img class="slideshow-image" src="<?php$row->afbeelding?>" alt=""><?php
            }
          }
        ?>
      </div>
      <div class="mySlides1">
        <img class="slideshow-image" src="images/index/aanbieding-2.png" alt="">
      </div>
      <div class="mySlides1">
        <img class="slideshow-image" src="images/index/aanbieding-3.png" alt="">
      </div>
      <button class="slideshow__button slideshow__button--right" onclick="plusSlides(1, 0)">
        <img src="images/master/right.png" alt="">
      </button>
    </div>

    <div class="slideshow-container">
      <h1 class="slideshow-title">Komende Evenementen</h1>
      <button class="slideshow__button slideshow__button--left" onclick="plusSlides(-1, 1)">
        <img src="images/master/left.png">
      </button>
      <div class="mySlides2">
        <img class="slideshow-image" src="images/index/evenement-1.png" alt="">
        <a class="slideshow__details" href="#">Details</a>
      </div>
      <div class="mySlides2">
        <img class="slideshow-image" src="images/index/evenement-2.png" alt="">
        <a class="slideshow__details" href="#">Details</a>
      </div>
      <div class="mySlides2">
        <img class="slideshow-image" src="images/index/evenement-3.png" alt="">
        <a class="slideshow__details" href="#">Details</a>
      </div>
      <button class="slideshow__button slideshow__button--right" onclick="plusSlides(1, 1)">
        <img src="images/master/right.png" alt="">
      </button>
    </div>

  </main>

  <script type="text/javascript" src="js/slideshow__index.js"></script>

  <?php get_footer(); ?>

</body>
</html>
