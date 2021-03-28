<?php

   include_once ('empleado.php');
   include_once ('conexion.php');

    if(isset($_POST["create"])){
        crearEmpleado();
    }

    function crearEmpleado(){
        echo "por aca entro";
        /*$empleado = new Empleado($_POST["cedula"],$_POST["nombre"], $_POST["sueldo"], $_POST["dias"],
        $_POST["hed"], $_POST["hen"], $_POST["hedd"], $_POST["hend"]);*/

        $sentencia = $mysqli->prepare("INSERT INTO empleados (cedula, nombre, sueldo, dias, hed, hen, hedd, hend) values(?,?,?,?,?,?,?,?)");
        $sentencia->bind_param("ssdiiiii", $_POST["cedula"],$_POST["nombre"], $_POST["sueldo"], $_POST["dias"],
        $_POST["hed"], $_POST["hen"], $_POST["hedd"], $_POST["hend"]);
        
        if($sentencia->execute()){
            return true;
        } else {
            return false;
        }
    }

    function getListaEmpleados(){
        $resultado = $mysqli->query("Select * from empleados");
        $empleados = $resultado->fetch_all(MYSQLI_ASSOC);
        return $empleados;
    }






?>