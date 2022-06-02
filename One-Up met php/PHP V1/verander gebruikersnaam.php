<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
    header("Location: login.php");
}

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
        <title>Ingelogd: <?php echo $_SESSION['username']?></title>
    </head>

    <body>
        <h2>Verander uw gebruikersnaam</h2>
        <form method="POST">
            <?php echo "<strong>" . $error . "</strong>"; ?><br>
            <label>Nieuw gebruikersnaam: </label><br><input type="text" name="username" /><br>
            <label>Wachtwoord: </label><br><input type="password" name="password" /><br><br>

            <input type="submit" name="submit" value="Verander" />
        </form>
        <br>
        <br>
        <a href="beheer account.php">Terug</a>
    </body>

</html>