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
<html>

    <head>
        <meta charset="UTF-8">
        <title>Inloggen</title>
    </head>

    <body>
        <h1>Inloggen</h1>
        <form method="POST">
            <?php echo "<strong>" . $error . "</strong>"; ?><br>
            <label>Gebruikersnaam: </label><br><input type="text" name="username" /><br>
            <label>Wachtwoord: </label><br><input type="password" name="password" /><br><br>
            <input type="submit" name="submit" value="Inloggen" />
        </form>
        <br>
        <br>
        <a href="signup.php">Maak Account</a>
    </body>

</html>