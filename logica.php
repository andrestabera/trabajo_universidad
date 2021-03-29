<?php

   include_once ('empleado.php');
   include_once ('conexion.php');

    if(isset($_POST["create"])){
        crearEmpleado($mysqli);
    }

    if(isset($_POST["eliminar"])){
        eliminarEmpleado($mysqli, $_POST["id"]);
    }

    function crearEmpleado($mysqli){
        /*$empleado = new Empleado($_POST["cedula"],$_POST["nombre"], $_POST["sueldo"], $_POST["dias"],
        $_POST["hed"], $_POST["hen"], $_POST["hedd"], $_POST["hend"]);*/

        $sentencia = $mysqli->prepare("INSERT INTO empleado (cedula, nombre, sueldo, dias, hed, hen, hedd, hend) values(?,?,?,?,?,?,?,?)");
        $sentencia->bind_param("ssdiiiii", $_POST["cedula"],$_POST["nombre"], $_POST["sueldo"], $_POST["dias"],
        $_POST["hed"], $_POST["hen"], $_POST["hedd"], $_POST["hend"]);
        
        
        if($sentencia->execute()){
            return true;
        } else {
            return false;
        }
    }

    function eliminarEmpleado($mysqli, $id){
        $sentencia = $mysqli->prepare("DELETE FROM empleado WHERE id = ?");
        $sentencia->bind_param("i", $id);
        if($sentencia->execute()){
            print_r("exito");
            return true;
        } else {
            print_r("fallo");
            return false;
        }
    }






?>