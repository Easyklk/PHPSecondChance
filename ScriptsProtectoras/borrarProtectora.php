<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cif = $_REQUEST['cif'];

if (isset($cif) && !empty($cif)) {

    $resultado = eliminarProtectora($cif);

    //echo $resultado;
    if ($resultado > 0) {
        echo Protocolo::CR_OK_DELETE;
    } else {
        echo Protocolo::CR_ERROR_DELETE;
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function eliminarProtectora($cif) {
    $cbd = new ConexionBD();
    $sql = "DELETE FROM protectoras WHERE cif = ?";
    $parametros = array($cif);
    $resultado = $cbd->consultaManipulacion($sql, $parametros);
    $cbd->cerrarConexion();

    return $resultado;
}
