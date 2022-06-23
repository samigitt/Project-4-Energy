<?php
require("php/functies.php");

if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
} else if ($_SESSION['permission'] < 2) {
    header("location:javascript://history.go(-1)");
}

require("php/dbconnect.php");

$error = "";

if (isset($_POST['submitVerwijder']) && $_SESSION['permission'] >= 2) {
    $sql = "DELETE FROM gebruikers WHERE gebruiker_id =" . $_POST['submitVerwijder'];
    if ($conn->query($sql)) {
        $error = "Gebruiker verwijderd";
    }
    else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
    


?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="One-Up">
        <meta name="author" content="Jesca Wiegers, Danny van Kampen, Erik Knöps, Sami Alouat">
        <meta name="keywords" content="">
        <link
            href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script type="text/javascript" src="js/burger-menu.js"></script>
        <title>One-Up</title>
    </head>

    <body>
        <?php get_header(); ?>


        <main class="container">
            <div class="loginform-container">
                <h1 class="loginform__h1">Beheer accounts</h1>
                <form method="POST">
                <?php
                echo '<strong>' . $error . '</strong><br>';
                $sql = "SELECT * FROM gebruikers";
                if ($gebruikersConn = $conn->query($sql)) {
                    while ($row = $gebruikersConn->fetch_object()) {
                        $dbid = $row->gebruiker_id;
                        $dbuser = $row->username;
                        echo '<div class="extra-margin-top">'.$dbid.' '.$dbuser.'<button name="submitVerwijder" value="'.$dbid.'">Verwijder</button></div><br>';
                    }
                    $gebruikersConn->close();
                }
                /*
                    echo '
                    <h1 class="loginform__h1">Accounts</h1>
                    <form method="POST">
                    '.  "<strong>" . $error . "</strong>" .'<br>
                        <input type="submit" name="1" value="'; if($jaKnopVerwijderen == 1){echo "Ja";}else{echo "Nee";} echo '"  class="extra-margin extra-margin-top"/>
                        <input type="submit" name="2" value="'; if($jaKnopVerwijderen == 2){echo "Ja";}else{echo "Nee";} echo '"  class="extra-margin extra-margin-top"/>
                    </form>
                    ';*/
                          
                ?>
                </form>
            </div>
        </main>
        <?php get_footer(); ?>
    </body>
</html>