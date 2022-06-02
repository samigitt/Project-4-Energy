<?php
require("dbconnect.php");

$error = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = ($_POST['password']);
        $sql = "SELECT * FROM gebruikers";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
                $dbuser = $row->username;
                $dbpass = $row->password;
                if ($username == $dbuser && $password == $dbpass) {
                    session_start();
                    $_SESSION['ingelogd'] = true;
                    $_SESSION['gebruiker_id'] = $row->gebruiker_id;
                    $_SESSION['username'] = $username;
                    $_SESSION['permission'] = $row->permission;
                    header("Location: ingelogd.php");
                }
            }
            $result->close();
        }
        $conn->close();

        $error = "Onjuist gebruikersnaam of wachtwoord";

    }
    else {
        $error = "Gebruikersnaam en wachtwoord zijn verplicht";
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
        <meta name="author" content="Jesca Wiegers, Danny van Kampen">
        <meta name="keywords" content="">
        <link
            href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/master.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <script type="text/javascript" src="../js/burger-menu.js"></script>
        <title>Log in</title>
    </head>

    <body>
        <header class="header">
            <nav>
                <div>
                    <a class="burger-menu-icon" onclick="clickBurgerMenu('aan')"><img class="small-icon hover"
                            src="../images/master/burger-menu-icon.png" alt=""></a>
                    <!--<a class="inloggen-button" href="./php/login.php">Inloggen</a>-->
                </div>

                <ul class="burger-menu" id="show-menu">
                    <li>
                        <a onclick="clickBurgerMenu('uit')"><img class="small-icon hover"
                                src="../images/master/cross-icon.png" alt=""></a>
                    </li>

                    <li><a href="../index.html">Home</a>
                    <li>

                    <li><a href="#">Producten</a>
                    <li>

                    <li><a href="#">Evenementen</a>
                    <li>

                    <li><a href="#">Ariesten</a>
                    <li>

                    <li><a href="#">Aanbiedingen</a>
                    <li>

                    <li><a href="#">Over Ons</a>
                    <li>

                    <li><a href="#">Contact</a>
                    <li>
                </ul>
            </nav>
            <section class="header-text">
                <h1>One-Up</h1>
                <h1>een extra leven</h1>
            </section>
        </header>







        <main class="container">
            <div class="loginform-container">
                <h1>Log in uw account</h1>
                <form method="POST">
                    <?php echo "<strong>" . $error . "</strong>"; ?><br>
                    <label>Gebruikersnaam: </label><br><input type="text" name="username" /><br>
                    <label>Wachtwoord: </label><br><input type="password" name="password" /><br><br>
                    <div class="loginform-buttons-container">
                        <input type="submit" name="submit" value="Inloggen" class="login-button" />
                        <a href="signup.php">Maak Account</a>
                    </div>
                </form>
            </div>



        </main>



        <footer>
            <section class="footer-row1 footer-flex">
                <a class="footer-padding">Copyright</a>
                <a class="footer-padding">Disclaimer</a>
            </section>

            <section class="footer-row2 footer-flex">
                <a class="footer-padding-small"><img class="small-icon" src="../images/master/facebook.png" alt=""></a>
                <a class="footer-padding-small"><img class="small-icon" src="../images/master/instagram.png" alt=""></a>
                <a class="footer-padding-small"><img class="small-icon" src="../images/master/twitter.png" alt=""></a>
                <a class="footer-padding-small"><img class="small-icon" src="../images/master/tiktok.png" alt=""></a>
            </section>
        </footer>
    </body>

</html>