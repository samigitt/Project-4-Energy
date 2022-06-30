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
<!--
  <main class="container">

    <div class="extra-container">
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

  </main>-->

  <main class="container">
    <div class="extra-container">

      <!--filter input knoppen -->
      <h1 class="pagina-titel">Komende Evenementen</h1>
      <input type="radio" id="All" name="categories" value="All" checked>
      <input type="radio" id="Naam" name="categories" value="Naam">
      <input type="radio" id="Datum" name="categories" value="Datum">
      <input type="radio" id="Tijd" name="categories" value="Tijd">
      <input type="radio" id="Plaats" name="categories" value="Plaats">


      <!--labels van de filter knoppen -->

      <ol class="filters">
        <li>
          Filter op
        </li> 
        <li>
          <label for="All">All</label>
        </li>
        <li>
          <label for="Naam">Naam</label>
        </li>
        <li>
          <label for="Datum">Datum</label>
        </li>
        <li>
          <label for="Tijd">Tijd</label>
        </li>
      </ol>

      <!-- filter for alles -->

      <ol class="posts">
        <li class="post" data-category="All">
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
          </div><br>  
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
          </div><br>
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
        </li>

        <!-- filter op naam -->

      <ol class="posts">
        <li class="post" data-category="Naam">
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
          </div><br>
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
          </div><br>
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
        </li>

            <!-- filter op datum -->

            <ol class="posts">
              <li class="post" data-category="Datum">
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
                </div><br>
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
                </div><br>
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
              </li>

        <!-- filter op tijd -->

        <ol class="posts">
          <li class="post" data-category="Tijd">
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
            </div><br>
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
            </div><br>
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
          </li>
    </main>

  <?php get_footer(); ?>

</body>
</html>
