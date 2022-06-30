<!DOCTYPE html>
<?php
// Database bewerk pagina 1.0 gemaakt door Erik

require("php/functies.php");

if ($_SESSION['ingelogd'] != true) {
  header("Location: login.php");
} else if ($_SESSION['permission'] < 2) {
  header("Location: beheer account.php");
}

  //alerts
  $alertAanbieding = "";
  $alertArtiest = "";
  $alertEvenement = "";
  $alertGebruiker = "";
  $alertLocatie = "";
  $alertReactie = "";

  //add
  if (isset($_POST['submit-aanbieding-add'])) {
    if (!empty($_POST['aanbieding-titel'])) {
      require('php/dbconnect.php');

      $aanbiedingId = $_POST['aanbieding-id'];
      $aanbiedingTitel = trim($_POST['aanbieding-titel']);
      $aanbiedingBegindatum = $_POST['aanbieding-begindatum'];
      $aanbiedingEinddatum = $_POST['aanbieding-einddatum'];
      $aanbiedingOmschrijving = trim($_POST['aanbieding-omschrijving']);
      $aanbiedingAfbeelding = trim($_POST['aanbieding-afbeelding']);
      $aanbiedingArtiestId = $_POST['aanbieding-artiest-id'];

      $sql = "INSERT INTO aanbiedingen VALUES (NULL, '$aanbiedingTitel', '$aanbiedingBegindatum', '$aanbiedingEinddatum',
      '$aanbiedingOmschrijving', '$aanbiedingAfbeelding', '$aanbiedingArtiestId')";

      if ($conn->query($sql)) {
        $alertAanbieding = "Aanbieding Toegevoegt";
      } else {
        $alertAanbieding = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertAanbieding = "Vul een Titel in";
    }
  }

  if (isset($_POST['submit-artiest-add'])) {
    if (!empty($_POST['artiest-naam'])) {
      require('php/dbconnect.php');

      $artiestId = $_POST['artiest-id'];
      $artiestNaam = trim($_POST['artiest-naam']);
      $artiestAchternaam = trim($_POST['artiest-achternaam']);
      $artiestVoornaam = trim($_POST['artiest-voornaam']);
      $artiestTussenvoegsel = trim($_POST['artiest-tussenvoegsel']);
      $artiestStatement = trim($_POST['artiest-statement']);
      $artiestTelefoon = $_POST['artiest-telefoon'];
      $artiestActief = $_POST['artiest-actief'];

      $sql = "INSERT INTO artiesten VALUES (NULL, '$artiestNaam', '$artiestAchternaam', '$artiestVoornaam',
      '$artiestTussenvoegsel', '$artiestStatement', '$artiestTelefoon', '$artiestActief')";

      if ($conn->query($sql)) {
        $alertArtiest = "Artiest Toegevoegt";
      } else {
        $alertArtiest = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertArtiest = "Vul een Naam in";
    }
  }

  if (isset($_POST['submit-evenement-add'])) {
    if (!empty($_POST['evenement-artiest-id'])) {
      require('php/dbconnect.php');

      $evenementId = $_POST['evenement-id'];
      $evenementDatum = $_POST['evenement-datum'];
      $evenementArtiestId = $_POST['evenement-artiest-id'];
      $evenementLocatieId = $_POST['evenement-locatie-id'];
      $evenementMaxBezoekers = $_POST['evenement-max-bezoekers'];

      $sql = "INSERT INTO evenementen VALUES (NULL, '$evenementDatum', '$evenementArtiestId', '$evenementLocatieId',
      '$evenementMaxBezoekers')";

      if ($conn->query($sql)) {
        $alertEvenement = "Evenement Toegevoegt";
      } else {
        $alertEvenement = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertEvenement = "Vul een Artiest Id in";
    }
  }

  if (isset($_POST['submit-gebruiker-add'])) {
    if (!empty($_POST['gebruiker-gebruikersnaam'])) {
      require('php/dbconnect.php');

      function safe($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
      }

      $gebruikerId = $_POST['gebruiker-id'];
      $gebruikerNaam = safe($_POST['gebruiker-gebruikersnaam']);
      $gebruikerWachtwoord = safe($_POST['gebruiker-wachtwoord']);
      $gebruikerWachtwoord = $conn->real_escape_string($gebruikerWachtwoord);
      $gebruikerToegang = $_POST['gebruiker-toegang'];

      $sql = "INSERT INTO gebruikers VALUES (NULL, '$gebruikerNaam', '$gebruikerWachtwoord', '$gebruikerToegang')";

      if ($conn->query($sql)) {
        $alertGebruiker = "Gebruiker Toegevoegt";
      } else {
        $alertGebruiker = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertGebruiker = "Vul een Gebruikersnaam in";
    }
  }

  if (isset($_POST['submit-locatie-add'])) {
    if (!empty($_POST['locatie-plaats'])) {
      require('php/dbconnect.php');

      $locatieId = $_POST['locatie-id'];
      $locatiePlaats = trim($_POST['locatie-plaats']);
      $locatieGebouw = trim($_POST['locatie-gebouw']);
      $locatieAdres = trim($_POST['locatie-adres']);
      $locatiePostcode = $_POST['locatie-postcode'];

      $sql = "INSERT INTO locaties VALUES (NULL, '$locatiePlaats', '$locatieGebouw', '$locatieAdres',
      '$locatiePostcode')";

      if ($conn->query($sql)) {
        $alertLocatie = "Locatie Toegevoegt";
      } else {
        $alertLocatie = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertLocatie = "Vul een Plaatsnaam in";
    }
  }

  if (isset($_POST['submit-reactie-add'])) {
    if (!empty($_POST['reactie-titel'])) {
      require('php/dbconnect.php');

      $reactieId = $_POST['reactie-id'];
      $reactieEvenementId = $_POST['reactie-evenement-id'];
      $reactieTitel = trim($_POST['reactie-titel']);
      $reactieInhoud = trim($_POST['reactie-inhoud']);
      $reactieAuteur = trim($_POST['reactie-auteur']);

      $sql = "INSERT INTO reacties VALUES (NULL, '$reactieEvenementId', '$reactieTitel', '$reactieInhoud',
      '$reactieAuteur')";

      if ($conn->query($sql)) {
        $alertReactie = "Reactie Toegevoegt";
      } else {
        $alertReactie = "Toevoegen Gefaalt";
      }
      $conn->close();
    } else {
      $alertReactie = "Vul een Titel in";
    }
  }

  //delete
  if (isset($_POST['submit-aanbieding-delete'])) {
    if (!empty($_POST['aanbieding-id'])) {
      require('php/dbconnect.php');

      $aanbiedingId = $_POST['aanbieding-id'];

      $sql = "DELETE FROM aanbiedingen WHERE aanbiedingen_id = $aanbiedingId;";

      if ($conn->query($sql)) {
        $alertAanbieding = "Aanbieding Verwijderd";
      } else {
        $alertAanbieding = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertAanbieding = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-artiest-delete'])) {
    if (!empty($_POST['artiest-id'])) {
      require('php/dbconnect.php');

      $artiestId = $_POST['artiest-id'];

      $sql = "DELETE FROM artiesten WHERE artiest_id = $artiestId;";

      if ($conn->query($sql)) {
        $alertArtiest = "Artiest Verwijderd";
      } else {
        $alertArtiest = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertArtiest = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-evenement-delete'])) {
    if (!empty($_POST['evenement-id'])) {
      require('php/dbconnect.php');

      $evenementId = $_POST['evenement-id'];

      $sql = "DELETE FROM evenementen WHERE evenement_id = $evenementId;";

      if ($conn->query($sql)) {
        $alertEvenement = "Evenement Verwijderd";
      } else {
        $alertEvenement = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertEvenement = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-gebruiker-delete'])) {
    if (!empty($_POST['gebruiker-id'])) {
      require('php/dbconnect.php');

      $gebruikerId = $_POST['gebruiker-id'];

      $sql = "DELETE FROM gebruikers WHERE gebruiker_id = $gebruikerId;";

      if ($conn->query($sql)) {
        $alertGebruiker = "Gebruiker Verwijderd";
      } else {
        $alertGebruiker = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertGebruiker = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-locatie-delete'])) {
    if (!empty($_POST['locatie-id'])) {
      require('php/dbconnect.php');

      $locatieId = $_POST['locatie-id'];

      $sql = "DELETE FROM locaties WHERE locatie_id = $locatieId;";

      if ($conn->query($sql)) {
        $alertLocatie = "Locatie Verwijderd";
      } else {
        $alertLocatie = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertLocatie = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-reactie-delete'])) {
    if (!empty($_POST['reactie-id'])) {
      require('php/dbconnect.php');

      $reactieId = $_POST['reactie-id'];

      $sql = "DELETE FROM reacties WHERE reactie_id = $reactieId;";

      if ($conn->query($sql)) {
        $alertReactie = "Reactie Verwijderd";
      } else {
        $alertReactie = "Verwijderen Gefaalt";
      }
      $conn->close();
    } else {
      $alertReactie = "Vul een Id in";
    }
  }

  //update
  if (isset($_POST['submit-aanbieding-update'])) {
    if (!empty($_POST['aanbieding-id'])) {
      require('php/dbconnect.php');

      $aanbiedingId = $_POST['aanbieding-id'];
      $aanbiedingTitel = trim($_POST['aanbieding-titel']);
      $aanbiedingBegindatum = $_POST['aanbieding-begindatum'];
      $aanbiedingEinddatum = $_POST['aanbieding-einddatum'];
      $aanbiedingOmschrijving = trim($_POST['aanbieding-omschrijving']);
      $aanbiedingAfbeelding = trim($_POST['aanbieding-afbeelding']);
      $aanbiedingArtiestId = $_POST['aanbieding-artiest-id'];

      $sql = "UPDATE aanbiedingen SET titel = '$aanbiedingTitel', begindatum = '$aanbiedingBegindatum', einddatum = '$aanbiedingEinddatum',
      omschrijving = '$aanbiedingOmschrijving', afbeelding = '$aanbiedingAfbeelding', artiest_id = '$aanbiedingArtiestId'
      WHERE aanbiedingen_id = '$aanbiedingId'";

      if ($conn->query($sql)) {
        $alertAanbieding = "Aanbieding Geupdate";
      } else {
        $alertAanbieding = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertAanbieding = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-artiest-update'])) {
    if (!empty($_POST['artiest-id'])) {
      require('php/dbconnect.php');

      $artiestId = $_POST['artiest-id'];
      $artiestNaam = trim($_POST['artiest-naam']);
      $artiestAchternaam = trim($_POST['artiest-achternaam']);
      $artiestVoornaam = trim($_POST['artiest-voornaam']);
      $artiestTussenvoegsel = trim($_POST['artiest-tussenvoegsel']);
      $artiestStatement = trim($_POST['artiest-statement']);
      $artiestTelefoon = $_POST['artiest-telefoon'];
      $artiestActief = $_POST['artiest-actief'];

      $sql = "UPDATE artiesten SET naam = '$artiestNaam', achternaam = '$artiestAchternaam',
      voornaam = '$artiestVoornaam', tussenvoegsel = '$artiestTussenvoegsel', statement = '$artiestStatement',
      telefoon = '$artiestTelefoon', actief = '$artiestActief'
      WHERE artiest_id = '$artiestId'";

      if ($conn->query($sql)) {
        $alertArtiest = "Artiest Geupdate";
      } else {
        $alertArtiest = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertArtiest = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-evenement-update'])) {
    if (!empty($_POST['evenement-id'])) {
      require('php/dbconnect.php');

      $evenementId = $_POST['evenement-id'];
      $evenementDatum = $_POST['evenement-datum'];
      $evenementArtiestId = $_POST['evenement-artiest-id'];
      $evenementLocatieId = $_POST['evenement-locatie-id'];
      $evenementMaxBezoekers = $_POST['evenement-max-bezoekers'];

      $sql = "UPDATE evenementen SET datum = '$evenementDatum', artiest_id = '$evenementArtiestId',
      locatie_id = '$evenementLocatieId', max_bezoekers = '$evenementMaxBezoekers' WHERE evenement_id = '$evenementId'";

      if ($conn->query($sql)) {
        $alertEvenement = "Evenement Geupdate";
      } else {
        $alertEvenement = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertEvenement = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-gebruiker-update'])) {
    if (!empty($_POST['gebruiker-id'])) {
      require('php/dbconnect.php');

      function safe($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
      }

      $gebruikerId = $_POST['gebruiker-id'];
      $gebruikerNaam = safe($_POST['gebruiker-gebruikersnaam']);
      $gebruikerWachtwoord = safe($_POST['gebruiker-wachtwoord']);
      $gebruikerWachtwoord = $conn->real_escape_string($gebruikerWachtwoord);
      $gebruikerToegang = $_POST['gebruiker-toegang'];

      $sql = "UPDATE gebruikers SET username = '$gebruikerNaam', password = '$gebruikerWachtwoord',
      permission = '$gebruikerToegang' WHERE gebruiker_id = '$gebruikerId'";

      if ($conn->query($sql)) {
        $alertGebruiker = "Gebruiker Geupdate";
      } else {
        $alertGebruiker = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertGebruiker = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-locatie-update'])) {
    if (!empty($_POST['locatie-id'])) {
      require('php/dbconnect.php');

      $locatieId = $_POST['locatie-id'];
      $locatiePlaats = trim($_POST['locatie-plaats']);
      $locatieGebouw = trim($_POST['locatie-gebouw']);
      $locatieAdres = trim($_POST['locatie-adres']);
      $locatiePostcode = $_POST['locatie-postcode'];

      $sql = "UPDATE locaties SET plaatsnaam = '$locatiePlaats', gebouw = '$locatieGebouw',
      adres = '$locatieAdres', postcode = '$locatiePostcode' WHERE locatie_id = '$locatieId'";

      if ($conn->query($sql)) {
        $alertLocatie = "Locatie Geupdate";
      } else {
        $alertLocatie = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertLocatie = "Vul een Id in";
    }
  }

  if (isset($_POST['submit-reactie-update'])) {
    if (!empty($_POST['reactie-id'])) {
      require('php/dbconnect.php');

      $reactieId = $_POST['reactie-id'];
      $reactieEvenementId = $_POST['reactie-evenement-id'];
      $reactieTitel = trim($_POST['reactie-titel']);
      $reactieInhoud = trim($_POST['reactie-inhoud']);
      $reactieAuteur = trim($_POST['reactie-auteur']);

      $sql = "UPDATE reacties SET evenement_id = '$reactieEvenementId', titel = '$reactieTitel',
      inhoud = '$reactieInhoud', auteur = '$reactieAuteur' WHERE reactie_id = '$reactieId'";

      if ($conn->query($sql)) {
        $alertReactie = "Reactie Geupdate";
      } else {
        $alertReactie = "Updaten Gefaalt";
      }
      $conn->close();
    } else {
      $alertReactie = "Vul een Id in";
    }
  }
?>


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

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Aanbiedingen</h3><br>
          <input type="number" name="aanbieding-id" placeholder="Id">
          <input type="text" name="aanbieding-titel" placeholder="Titel">
          <input type="date" name="aanbieding-begindatum" placeholder="Begindatum yyyy-mm-dd">
          <input type="date" name="aanbieding-einddatum" placeholder="Einddatum yyyy-mm-dd">
          <input type="text" name="aanbieding-omschrijving" placeholder="Omschrijving">
          <input type="text" name="aanbieding-afbeelding" placeholder="Afbeelding(tekst)">
          <input type="number" name="aanbieding-artiest-id" placeholder="Artiest Id">
          <input class="submit-button" type="submit" name="submit-aanbieding-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-aanbieding-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-aanbieding-add" value="Toevoegen">
          <p class="alert"><?php echo $alertAanbieding; ?></p>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Artiesten</h3><br>
          <input type="number" name="artiest-id" placeholder="Id">
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
          <p class="alert"><?php echo $alertArtiest; ?></p>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Evenementen</h3><br>
          <input type="number" name="evenement-id" placeholder="Id">
          <input type="date" name="evenement-datum" placeholder="Datum">
          <input type="number" name="evenement-artiest-id" placeholder="Artiest Id">
          <input type="number" name="evenement-locatie-id" placeholder="Locatie Id">
          <input type="number" name="evenement-max-bezoekers" placeholder="Max Aantal Bezoekers">
          <input class="submit-button" type="submit" name="submit-evenement-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-evenement-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-evenement-add" value="Toevoegen">
          <p class="alert"><?php echo $alertEvenement; ?></p>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Gebruikers</h3><br>
          <input type="number" name="gebruiker-id" placeholder="Id">
          <input type="text" name="gebruiker-gebruikersnaam" placeholder="Gebruikersnaam">
          <input type="password" name="gebruiker-wachtwoord" placeholder="Wachtwoord">
          <input type="number" name="gebruiker-toegang" placeholder="Level van Toegang">
          <input class="submit-button" type="submit" name="submit-gebruiker-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-gebruiker-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-gebruiker-add" value="Toevoegen">
          <p class="alert"><?php echo $alertGebruiker; ?></p>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Locaties</h3><br>
          <input type="number" name="locatie-id" placeholder="Id">
          <input type="text" name="locatie-plaats" placeholder="Plaatsnaam">
          <input type="text" name="locatie-gebouw" placeholder="Gebouw">
          <input type="text" name="locatie-adres" placeholder="Adres">
          <input type="text" name="locatie-postcode" placeholder="Postcode">
          <input class="submit-button" type="submit" name="submit-locatie-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-locatie-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-locatie-add" value="Toevoegen">
          <p class="alert"><?php echo $alertLocatie; ?></p>
        </form>

        <br>
        <br>
        <br>

        <form action="bewerken.php" method="POST" class="form-bewerken">
          <h3>Reacties</h3><br>
          <input type="number" name="reactie-id" placeholder="Id">
          <input type="number" name="reactie-evenement-id" placeholder="Evenement Id">
          <input type="text" name="reactie-titel" placeholder="Titel">
          <input type="text" name="reactie-inhoud" placeholder="Bericht">
          <input type="text" name="reactie-auteur" placeholder="Auteur">
          <input class="submit-button" type="submit" name="submit-reactie-delete" value="Verwijderen">
          <input class="submit-button" type="submit" name="submit-reactie-update" value="Bewerken">
          <input class="submit-button" type="submit" name="submit-reactie-add" value="Toevoegen">
          <p class="alert"><?php echo $alertReactie; ?></p>
        </form>

      </section>

    </section>
  </main>

  <?php get_footer(); ?>

</body>
</html>
