<?php
require("dbconnect.php");

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
                    $lastid = $row->gebruiker_id;
                    if ($username == $dbuser) {
                        $error = "Gebruikersnaam in gebruik";
                    }
                }
                $result->close();
                if ($error == "") {
                    $sql = "INSERT INTO gebruikers (gebruiker_id, username, password, permission) VALUES ('" . $lastid + 1 . "','" . $username . "','" . $password . "','" . 1 . "')";

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
        <title>Maak nieuw account</title>
    </head>

    <body>
        <h1>Maak nieuw account aan</h1>
        <form method="POST">
            <?php echo "<strong>" . $error . "</strong>"; ?><br>
            <label>Gebruikersnaam: </label><br><input type="text" name="username" value=<?php if(!empty($_POST['username'])){echo "'" . $_POST['username'] . "'";} ?> ><br>
            <label>Wachtwoord: </label><br><input type="password" name="password" /><br><br>
            <label>Herhaal wachtwoord: </label><br><input type="password" name="password2" /><br><br>
            <input type="submit" name="submit" value="Maak aan" />
        </form>
        <br>
        <br>
        <a href='login.php'>Inloggen</a>
    </body>

</html>