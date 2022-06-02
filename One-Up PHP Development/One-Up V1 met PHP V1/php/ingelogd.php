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

        <?php
echo "Gebruikersnaam: ".$_SESSION['username'];
?>
        <br>
        <br>
        <nav>
            <a href="beheer account.php">Beheer account</a>
            <a href="logout.php">Uitloggen</a>
        </nav>
    </body>

</html>