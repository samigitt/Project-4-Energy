<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}

require("dbconnect.php");

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
        <title>Ingelogd: <?php echo $_SESSION['username']?></title>
    </head>

    <body>
        <h2>Verander uw wachtwoord</h2>
        <form method="POST">
            <?php echo "<strong>" . $error . "</strong>"; ?><br>
            <label>Oud wachtwoord: </label><br><input type="password" name="password" /><br>
            <label>Nieuw wachtwoord: </label><br><input type="password" name="password1" /><br>
            <label>Herhaal nieuw wachtwoord: </label><br><input type="password" name="password2" /><br><br>

            <input type="submit" name="submit" value="Verander" />
        </form>
        <br>
        <br>
        <a href="beheer account.php">Terug</a>
    </body>

</html>