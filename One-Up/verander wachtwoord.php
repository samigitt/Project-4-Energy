<?php
require("php/functies.php");

if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}

require("php/dbconnect.php");

$error = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST['password']) && !empty($_POST['password1'])) {
        if ($_POST['password1'] == $_POST['password2']) {
            $password = ($_POST['password']);
            $sql = "SELECT * FROM gebruikers WHERE gebruiker_id =".$_SESSION['gebruiker_id'];
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_object()) {
                    $dbpass = $row->password;
                    if($password == $dbpass){
                        $sql = "UPDATE gebruikers SET password ='" . $_POST['password1'] . "'WHERE gebruiker_id =" . $_SESSION['gebruiker_id'];
                        if ($conn->query($sql) === TRUE) {
                            $error = "Wachtwoord successvol veranderd";
                        }
                        else {
                            $error = "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }else{
                        $error = "Onjuist wachtwoord";
                    }
                }
                $result->close();
            }
            $conn->close();
        }else if($error == ""){
            $error = "Herhaald wachtwoord komt niet overeen";
        }
    }
    else {
        $error = "Wachtwoord is verplicht";
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
                <h1 class="loginform__h1">Verander uw wachtwoord</h1>
                <form method="POST" action="verander wachtwoord.php">
                    <?php echo "<strong>" . $error . "</strong>"; ?><br>
                    <input type="password" name="password" placeholder="Oud wachtwoord"/><br>
                    <input type="password" name="password1" placeholder="Nieuw wachtwoord"/><br>
                    <input type="password" name="password2" placeholder="Herhaal nieuw wachtwoord"/><br><br>
                    <input type="submit" name="submit" value="Verander"/>
                </form>
                <a href="beheer account.php">Terug</a>
            </div>
        </main>

        <?php get_footer(); ?>
    </body>
</html>