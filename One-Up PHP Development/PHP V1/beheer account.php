<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Ingelogd: <?php echo $_SESSION['username']?></title>
    </head>

    <body>

        <a href="verander gebruikersnaam.php" style="text-decoration: none;">Verander gebruikersnaam</a>
        <br>
        <br>
        <a href="verander wachtwoord.php" style="text-decoration: none;">Verander wachtwoord</a>
        <br>
        <br>
        <a href="verwijder account.php" style="color: red; text-decoration: none;">[Verwijder account]</a>
        <br>
        <br>
        <a href="ingelogd.php">Terug</a>
        <a href="logout.php">Uitloggen</a>
    </body>

</html>