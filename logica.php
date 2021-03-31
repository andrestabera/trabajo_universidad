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

        $cedula = $_POST["cedula"];
        $nombre = $POST["nombre"];
        $sueldo = $POST["sueldo"];
        $dias = $POST["dias"];
        $hed = (valor_hora * 1.25) * $POST["hed"];
        $hen = (valor_hora * 1.75) * $POST["hen"];
        $hedd = (valor_hora * 2) * $POST["hedd"];
        $hend = (valor_hora * 2.5) * $POST["hend"];
        $valor_hora = 7500;
        $basico = $sueldo;
        $aux_trans = 3428 * $dias;
        $total_extra = $hed + $hen + $hedd + $hend;
        $total_devengado = $sueldo + $aux_trans + $total_extra;
        $salud = $sueldo * 0.004;
        $pension = $sueldo * 0.004;
        $arl = $sueldo * 0.00522;
        $icbf = $sueldo * 0.003;
        $fondo_solidario = $sueldo * 0.004;
        $retefuente = $sueldo * 0.025;
        $total_parafiscales = $salud + $pension + $arl + $icbf + $fondo_solidario + $retefuente;
        $prima = ($sueldo * $dias)/360;
        $vacaciones = ($sueldo * $dias)/720;
        $cesantias = ($sueldo * $dias)/360;
        $int_cesantias(($cesantias * $dias)*0.12)/360;
        $total_prestaciones = $prima + $vacaciones + $cesantias + $int_cesantias;
        
        $sentencia = $mysqli->prepare("INSERT INTO empleado (cedula, nombre, sueldo, dias, hed, hen, hedd, hend, basico, 
        aux_trans, total_extra, total_devengado, salud, pension, arl, icbf, fondo_solidario, retefuente, total_parafiscales,
        prima, vacaciones, cesantias, int_cesantias, total_prestaciones) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sentencia->bind_param("ssdddddddddddddd", $cedula, $nombre, $sueldo, $dias, $hed, $hen, $hedd, $hend, $basico, 
        $aux_trans, $total_extra, $total_devengado, $salud, $pension, $arl, $icbf, $fondo_solidario, $retefuente, $total_parafiscales,
        $prima, $vacaciones, $cesantias, $int_cesantias, $total_prestaciones);
        
        
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