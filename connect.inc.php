<?php
//local
// $mysqli =  mysqli_connect('localhost', 'root', '', 'reservering');

//connect naar schoolserver
$mysqli =  mysqli_connect('localhost', '0910135', 'siefieco', '0910135');

if (mysqli_connect_errno()) {
echo "Failed to connect:", mysqli_connect_error();
}



?>