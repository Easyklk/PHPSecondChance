<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';

$codigo = $_REQUEST['codigo'];


if (isset($codigo) && !empty($codigo)) {
 
    $resultado = eliminarMascota($codigo);

    //echo $resultado;
    if ($resultado > 0) {
        echo Protocolo::CR_OK_DELETE;
    } else {
        echo Protocolo::CR_ERROR_DELETE;
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function eliminarMascota($codigo) {
    $cbd = new ConexionBD();
    $sql = "DELETE FROM mascotas WHERE codigo = ?";
    $parametros = array($codigo);
    $resultado = $cbd->consultaManipulacion($sql, $parametros);
    $cbd->cerrarConexion();

    return $resultado;
}

