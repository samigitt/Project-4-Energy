<?php
session_start();

if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}

require("dbconnect.php");

if(!isset($_SESSION['verwijderFase3'])){
    $_SESSION['verwijderFase3'] = false;
}

if(!isset($_SESSION['verwijderFase2'])){
    $_SESSION['verwijderFase2'] = false;
    $_SESSION['verwijderSomAntwoord'] = 0;
}

if((!isset($_POST["1"]) && !isset($_POST["2"]) && !isset($_POST["submitRekenAntwoord"]) && (!isset($_SESSION['aantalJaVoorVerwijderen']) && !$_SESSION['verwijderFase2'] && !isset($_POST["submitVerwijderen"]) && !$_SESSION['verwijderFase3'])) || isset($_POST["annuleerVerwijderen"])){
    $_SESSION['aantalJaVoorVerwijderen'] = 0;
    $_SESSION['aantalSommenVoorVerwijderen'] = 0;
    $_SESSION['verwijderFase2'] = false;
    $_SESSION['verwijderFase3'] = false;
}

$jaKnopVerwijderen = rand(1,2);
$aantalJaNodig = 8;
$aantalSommenNodig = 2;
$knopAntwoord = "";
$error = "";

if($_SESSION['aantalJaVoorVerwijderen'] >= $aantalJaNodig-1){
    $_SESSION['verwijderFase2'] = true;
}

if (isset($_POST["1"])) {
    if($_POST["1"] == "Ja"){$knopAntwoord = "Ja";}else{$knopAntwoord = "Nee";}
}

if (isset($_POST["2"])) {
    if($_POST["2"] == "Ja"){$knopAntwoord = "Ja";}else{$knopAntwoord = "Nee";}
}

if($knopAntwoord == "Ja"){
    $_SESSION['aantalJaVoorVerwijderen'] += 1;
}
if($knopAntwoord == "Nee"){
    header("Location: beheer account.php");
}

if($_SESSION['aantalSommenVoorVerwijderen'] >= $aantalSommenNodig-1){
    $_SESSION['verwijderFase3'] = true;
}

if (isset($_POST['submitVerwijder']) && $_SESSION['verwijderFase2'] && $_SESSION['verwijderFase3']) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = ($_POST['password']);
        $sql = "SELECT * FROM gebruikers WHERE gebruiker_id =".$_SESSION['gebruiker_id'];
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
                $dbuser = $row->username;
                $dbpass = $row->password;
                if($username == $dbuser && $password == $dbpass){
                    $sql = "DELETE FROM gebruikers WHERE gebruiker_id =" . $_SESSION['gebruiker_id'];
                    if ($conn->query($sql) === TRUE) {
                        header("Location: logout.php");
                    }
                    else {
                        $error = "Error: " . $sql . "<br>" . $conn->error;
                    }
                }else{
                    $error = "Onjuist gebruikersnaam of wachtwoord";
                }
            }
            $result->close();
        }
        $conn->close();
    }
    else {
        $error = "Gebruikersnaam en wachtwoord zijn verplicht";
    }

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
        if($_SESSION['verwijderFase3']){
            echo '
            <h2>Log in om uw account te verwijderen</h2>
            <form method="POST">
                '.  "<strong>" . $error . "</strong>" .'<br>
                <label>Gebruikersnaam: </label><br><input type="text" name="username" /><br>
                <label>Wachtwoord: </label><br><input type="password" name="password" /><br><br>
                <input type="submit" name="submitVerwijder" value="Verwijder" />
                <input type="submit" name="annuleerVerwijderen" value="Annuleren" />
            </form>
            <br>
            <br>
        ';

        }else if($_SESSION['verwijderFase2']){
        //session_destroy();
        /*echo "<p>Account verwijdert...</p>";
        echo '<br><a href="login.php">Terug naar login</a>';*/

        $randomGetal1 = rand(-999,999);
        $randomGetal2 = rand(-999,999);

        echo '
        <h2>Leeftijd controle</h2>
        <p>Wat is '.$randomGetal1." + ".$randomGetal2.'?</p>
        <form method="POST">
            <input type="number" name="rekenAntwoord" value="" />
            <input type="submit" name="submitRekenAntwoord" value="Volgende" />
            <input type="submit" name="annuleerVerwijderen" value="Annuleren" />';

            if (isset($_POST["submitRekenAntwoord"]) && !empty($_POST["rekenAntwoord"])) {
            if($_POST["rekenAntwoord"] == $_SESSION['verwijderSomAntwoord']){
            $_SESSION['aantalSommenVoorVerwijderen'] += 1;
            }else{
            $_SESSION['aantalJaVoorVerwijderen'] = 0;
            $_SESSION['aantalSommenVoorVerwijderen'] = 0;
            $_SESSION['verwijderFase2'] = false;
            header("Location: beheer account.php");
            }
            }elseif(isset($_POST["submitRekenAntwoord"]) && empty($_POST["rekenAntwoord"])){
            echo '<p style="color: red;">Antwoord is verplicht om verder te gaan</p>';
            }
            $_SESSION['verwijderSomAntwoord'] = $randomGetal1 + $randomGetal2;

            echo '<p>'.$_SESSION['aantalSommenVoorVerwijderen']."/".$aantalSommenNodig.'</p>';







            }else{
            echo '
            <h2>Weet u het zeker?</h2>
            <p>Al uw gegevens gaat verloren</p>
            <form method="POST">
                <input type="submit" name="1" value="'; if($jaKnopVerwijderen == 1){echo "Ja";}else{echo "Nee";} echo '" />
                <input type="submit" name="2" value="'; if($jaKnopVerwijderen == 2){echo "Ja";}else{echo "Nee";} echo '" />
                <p>' .$_SESSION['aantalJaVoorVerwijderen']."/".$aantalJaNodig.'</p>
            </form>
            ';
            }


            ?>
    </body>

</html>