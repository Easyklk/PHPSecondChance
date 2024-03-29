<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$codigo = $_REQUEST['codIdentificador'];

if (isset($codigo) && !empty($codigo)) {

    $resultado = eliminarMascota($codigo);

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
    $sql = "DELETE FROM mascotas WHERE codIdentificador = ?";
    $parametros = array($codigo);
    $resultado = $cbd->consultaManipulacion($sql, $parametros);
    $cbd->cerrarConexion();

    return $resultado;
}
