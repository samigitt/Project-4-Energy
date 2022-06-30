<?php
require("php/functies.php");

if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}

require("php/dbconnect.php");

$error = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = ($_POST['password']);
        $sql = "SELECT * FROM gebruikers";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
                $dbuser = $row->username;
                if ($username == $dbuser) {
                    $error = "Gebruikersnaam in gebruik";
                }
            }
        }
        if($error == ""){
            $sql = "SELECT * FROM gebruikers WHERE gebruiker_id =" . $_SESSION['gebruiker_id'];
            if($result = $conn->query($sql)){
                while ($row = $result->fetch_object()) {
                    $dbuser = $row->username;
                    $dbpass = $row->password;
                
                    if($_SESSION['username'] == $dbuser && $password == $dbpass){
                        $sql = "UPDATE gebruikers SET username ='" . $username . "' WHERE gebruiker_id =" . $_SESSION['gebruiker_id'];
                        if ($conn->query($sql) === TRUE) {
                            $error = "Gebruikersnaam successvol veranderd ";
                            $_SESSION['username'] = $username;
                        }
                        else {
                            $error = "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }else{
                        $error = "Onjuist wachtwoord";
                    }
                }
            }   
        }
        $result->close();
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
                <h1 class="loginform__h1">Verander uw gebruikersnaam</h2>
                <form method="POST" action="verander gebruikersnaam.php">
                    <?php echo "<strong>" . $error . "</strong>"; ?><br>
                    <input type="text" name="username" placeholder="Nieuw gebruikersnaam"/><br>
                    <input type="password" name="password" placeholder="Wachtwoord"/><br><br>
                    <input type="submit" name="submit" value="Verander"/>
                </form>
                <a href="beheer account.php">Terug</a>
            </div>
        </main>

        <?php get_footer(); ?>
    </body>
</html>