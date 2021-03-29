<?php 

    include_once ('conexion.php');

    $resultado = $mysqli->query("Select * from empleado");
    $empleados = $resultado->fetch_all(MYSQLI_ASSOC);

?>