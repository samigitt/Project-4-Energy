<?php
require("php/functies.php"); 
require("php/dbconnect.php");

if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']){
    header("location:javascript://history.go(-1)");
}

$error = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        if ($_POST['password'] == $_POST['password2']) {
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
                $result->close();
                if ($error == "") {
                    $sql = "INSERT INTO gebruikers (username, password, permission) VALUES ('" . $username . "','" . $password . "','" . 1 . "')";

                    if ($conn->query($sql) === TRUE) {
                        $error = "Gebruiker successvol aangemaakt ";
                    }
                    else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                $conn->close();
            }

        }
        else {
            $error = "Herhaald wachtwoord komt niet overeen";
        }
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
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <script type="text/javascript" src="js/burger-menu.js"></script>
        <title>One-Up</title>
    </head>

    <body>
        <?php get_header(null,true,"Registreren"); ?>

        <main class="container">
            <div class="loginform-container">
                <h1>Maak uw account aan</h1>
                <form method="POST" action="signup.php">
                    <?php echo "<strong>" . $error . "</strong>"; ?><br><br>
                    <input type="text" name="username" placeholder="Gebruikersnaam" value=<?php if(!empty($_POST['username'])){echo "'" . $_POST['username'] . "'";} ?> ><br>
                    <input type="password" name="password" placeholder="Wachtwoord"><br>
                    <input type="password" name="password2" placeholder="Herhaal Wachtwoord"><br><br>
                    <input type="submit" name="submit" value="Registreren">
                </form>
            </div>
        </main>

        <?php get_footer(); ?>
    </body>

</html>