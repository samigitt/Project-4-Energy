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
  <link rel="stylesheet" type="text/css" href="css/aanbiedingen.css">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header("aanbiedingen"); ?>

  <main class="container">
    <section class="row-1">
        <h1 class="pagina-titel">Huidige Aanbieding</h1>
        <img class="row-1__img" src="images/aanbiedingen/placeholder-square-1.png" alt="">
    </section>

    <section class="row-2">
      <h1 class="pagina-titel">Komende Aanbiedingen</h1>
      <div class="row-2__images">
        <img class="row-2__img" src="images/aanbiedingen/placeholder-square-1.png" alt="">
        <img class="row-2__img" src="images/aanbiedingen/placeholder-square-1.png" alt="">
        <img class="row-2__img" src="images/aanbiedingen/placeholder-square-1.png" alt="">
      </div>
    </section>
  </main>

  <?php get_footer(); ?>

</body>
</html>
