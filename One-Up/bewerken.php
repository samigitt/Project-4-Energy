<?php
require("php/functies.php");
?>

<?php
  $alertAanbieding = "";
  if (isset($_POST['submit-aanbieding-add'])) {
    if (!empty($_POST['aanbieding-id'])) {
      require('dbconnect.php');

      $aanbiedingId = $_POST['aanbieding-id'];
      $aanbiedingTitel = trim($_POST['aanbieding-titel']);
      $aanbiedingBegindatum = $_POST['aanbieding-begindatum'];
      $aanbiedingEinddatum = $_POST['aanbieding-einddatum'];
      $aanbiedingOmschrijving = trim($_POST['aanbieding-omschrijving']);
      $aanbiedingAfbeelding = trim($_POST['aanbieding-afbeelding']);
      $aanbiedingArtiestid = $_POST['aanbieding-artiest-id'];

      $sql = "INSERT INTO evenementen VALUES ('$aanbiedingId', '$aanbiedingTitel', '$aanbiedingBegindatum',
        '$aanbiedingEinddatum', '$aanbiedingOmschrijving', '$aanbiedingAfbeelding', '$aanbiedingArtiestid');";

      if ($conn->query($sql) === TRUE) {
        $alertAanbieding = "Aanbieding Toegevoegt";
      } else {
        $alertAanbieding = "Toevoegen Gefaalt";
      }
      $conn->close();
    }
  }


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
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" type="text/css" href="css/bewerken.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <script type="text/javascript" src="js/burger-menu.js"></script>
  <title>One-Up</title>
</head>

<body>
  <?php get_header(); ?>

  <main class="container">
    <section class="titel">
      <h1 class="pagina-titel">Bewerking Pagina</h1>
      <h2 class="pagina-subtitel">Voor beheerders</h2>
    </section>

    <section class="content">
      <section class="content__text">

        <form action="bewerken.php" method="post">
          <h3>Aanbiedingen</h3><br>
          <input type="number" name="aanbieding-id" placeholder="Id" required>
          <input type="text" name="aanbieding-titel" placeholder="Titel">
          <input type="date" name="aanbieding-begindatum" placeholder="Begindatum yyyy-mm-dd">
          <input type="date" name="aanbieding-einddatum" placeholder="Einddatum yyyy-mm-dd">
          <input type="text" name="aanbieding-omschrijving" placeholder="Omschrijving">
          <input type="text" name="aanbieding-afbeelding" placeholder="Afbeelding(tekst)">
          <input type="number" name="aanbieding-artiest-id" placeholder="Artiest Id">
          <input class="submit-button" type="submit" name="submit-aanbieding-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-aanbieding-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-aanbieding-add" value="Toevoegen">
          <?php echo $alertAanbieding; ?>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="post">
          <h3>Artiesten</h3><br>
          <input type="number" name="artiest-id" placeholder="Id" required>
          <input type="text" name="artiest-naam" placeholder="Naam">
          <input type="text" name="artiest-achternaam" placeholder="Achternaam">
          <input type="text" name="artiest-voornaam" placeholder="Voornaam">
          <input type="text" name="artiest-tussenvoegsel" placeholder="Tussenvoegsel">
          <input type="text" name="artiest-statement" placeholder="Statement">
          <input type="tel" name="artiest-telefoon" placeholder="Telefoonnummer">
          <input type="number" name="artiest-actief" placeholder="Activiteit">
          <input class="submit-button" type="submit" name="submit-artiest-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-artiest-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-artiest-add" value="Toevoegen">
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="post">
          <h3>Evenementen</h3><br>
          <input type="number" name="evenement-id" placeholder="Id" required>
          <input type="date" name="evenement-datum" placeholder="Datum">
          <input type="number" name="evenement-artiest-id" placeholder="Artiest Id">
          <input type="number" name="evenement-locatie-id" placeholder="Locatie Id">
          <input type="number" name="evenement-max-bezoekers" placeholder="Max Aantal Bezoekers">
          <input class="submit-button" type="submit" name="submit-evenement-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-evenement-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-evenement-add" value="Toevoegen">
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="post">
          <h3>Gebruikers</h3><br>
          <input type="number" name="gebruiker-id" placeholder="Id" required>
          <input type="text" name="gebruiker-gebruikersnaam" placeholder="Gebruikersnaam">
          <input type="password" name="gebruiker-wachtwoord" placeholder="Wachtwoord">
          <input type="number" name="gebruiker-toegang" placeholder="Level van Toegang">
          <input class="submit-button" type="submit" name="submit-gebruiker-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-gebruiker-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-gebruiker-add" value="Toevoegen">
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="post">
          <h3>Locaties</h3><br>
          <input type="number" name="locatie-id" placeholder="Id" required>
          <input type="text" name="locatie-plaats" placeholder="Plaatsnaam">
          <input type="text" name="locatie-gebouw" placeholder="Gebouw">
          <input type="text" name="locatie-adres" placeholder="Adres">
          <input type="text" name="locatie-postcode" placeholder="Postcode">
          <input class="submit-button" type="submit" name="submit-locatie-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-locatie-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-locatie-add" value="Toevoegen">
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="post">
          <h3>Reacties</h3><br>
          <input type="number" name="reactie-id" placeholder="Id" required>
          <input type="number" name="reactie-evenement-id" placeholder="Evenement Id">
          <input type="text" name="reactie-titel" placeholder="Titel">
          <input type="text" name="reactie-inhoud" placeholder="Bericht">
          <input type="text" name="reactie-auteur" placeholder="Auteur">
          <input class="submit-button" type="submit" name="submit-reactie-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-reactie-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-reactie-add" value="Toevoegen">
        </form>

      </section>

    </section>
  </main>

  <?php get_footer(); ?>

</body>
</html>
