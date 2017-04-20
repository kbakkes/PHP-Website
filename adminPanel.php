<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/tableStyle.css" /></head>
<body>
<p>
    <a href="index.html">
        <img border="0" alt="Vorige pagina" src="http://cdn.flaticon.com/png/256/340.png" width="50" height="50">
    </a>
</p>


<p><table style="margin: 0 auto;   ">
    <th class='th'>Naam</th>
    <th class='th'>Email</th>
    <th class='th'>Telefoon</th>
    <th class='th'>Behandeling</th>
    <th class='th'>Tijd</th>
    <th class='th'>Datum</th>

<?php
// hier voegt hij de connect
require("connect.inc.php");

// hier haalt het systeem alle tags weg
if (isset($_POST['submit'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

}   // controle op de username en password
    if (($username === "admin") && ($password === "admin")) {


// verbinden
        //local
        // $mysqli = NEW MySQLi('localhost', 'root', '', 'reservering');

        // online
        $db = mysqli_connect('localhost', '0910135', 'siefieco', '0910135');

// query de datasbase
        $resultSet = $mysqli->query("SELECT * FROM `formulier`");

// count de returned rows
        if ($resultSet->num_rows != -0) {
            while ($rows = $resultSet->fetch_assoc()) {
                $naam = $rows ['naam'];
                $email = $rows['email'];
                $telefoon = $rows ['telefoon'];
                $behandeling = $rows ['behandeling'];
                $tijden = $rows['tijden'];
                $datum = $rows ['datum'];


                echo "
    <tr> </tr>
    <td>$naam </td>
    <td>$email</td>
    <td>$telefoon</td>
    <td>$behandeling</td>
    <td>$tijden</td>
    <td>$datum</td>


";
            }


        }
    }

?>











</body>
</html>

