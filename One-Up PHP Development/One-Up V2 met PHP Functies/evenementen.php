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
  <link rel="stylesheet" type="text/css" href="css/evenementen.css">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header(); ?>

  <main class="container">

    <div class="extra-container">
      <?php
        require('dbconnect.php');

        // $username = trim($_SESSION['user']);
        // $password = trim($_SESSION['pass']);

        $sql = "SELECT * FROM gebruikers WHERE username = 'admin'";

        if ($result = $conn->query($sql)) {
          $rowresult = $result->fetch_row();
          $toestemming = $rowresult[3];

          if ($toestemming == 2) {
            ?> <script type="text/javascript" src="js/extra-functies.js"> showExtraFuncties("ja"); </script><?php
            $result->close();
            echo "toestemming";
          } else {
            ?> <script type="text/javascript" src="js/extra-functies.js"> showExtraFuncties("nee"); </script><?php
            $result->close();
            echo "geen toestemming";
          }
        }
      ?>

      <a class="bewerken-button extra-functies" href="#">Evenementen Bewerken</a>
      <h1 class="pagina-titel">Komende Evenementen</h1>

      <div class="filteren">
        <p>Filter op</p>
        <p>Plaats</p>
        <img src="images/evenementen/down-arrow-icon.png" alt="">
      </div>

      <div class="event-container">
        <img src="images/evenementen/evenement-1-small.png" alt="">
        <div class="event-container__info">
          <h1 class="event-container__info-title">Graspop Metal Meeting 2022</h1>
          <h2 class="event-container__info-date">DO 16 juni &nbsp; - &nbsp; ZO 19 juni</h2>
          <div class="event-container__info-time-location">
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/clock-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>10:00 - 23:59</p>
            </div>
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/marker-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>Antwerpen</p>
            </div>
          </div>
        </div>
      </div>

      <div class="event-container">
        <img src="images/evenementen/evenement-2-small.png" alt="">
        <div class="event-container__info">
          <h1 class="event-container__info-title">Dance Valley Festival</h1>
          <h2 class="event-container__info-date">ZA 13 augustus</h2>
          <div class="event-container__info-time-location">
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/clock-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>12:00 - 23:00</p>
            </div>
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/marker-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>Spaarnwoude</p>
            </div>
          </div>
        </div>
      </div>

      <div class="event-container">
        <img src="images/evenementen/evenement-3-small.png" alt="">
        <div class="event-container__info">
          <h1 class="event-container__info-title">Lowlands 2022</h1>
          <h2 class="event-container__info-date">VR 19 augustus &nbsp; - &nbsp; ZO 21 augustus</h2>
          <div class="event-container__info-time-location">
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/clock-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>12:00 - 00:00</p>
            </div>
            <div class="event-container__info-container">
              <img class="event-container__info-img" src="images/evenementen/marker-icon.png" alt="">
              <div class="extra-padding"></div>
              <p>Biddinghuizen</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

  <?php get_footer(); ?>

</body>
</html>
