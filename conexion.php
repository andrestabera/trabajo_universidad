<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="nomina";
$usertable="empleado";
$yourfield = "your_field";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

return $mysqli;

?>