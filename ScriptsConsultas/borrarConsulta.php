<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cod_consulta = $_REQUEST['cod_consulta'];


if (isset($cod_consulta) && !empty($cod_consulta)) {
 
    $resultado = eliminarConsulta($cod_consulta);

    //echo $resultado;
    if ($resultado > 0) {
        echo Protocolo::CR_OK_DELETE;
    } else {
        echo Protocolo::CR_ERROR_DELETE;
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function eliminarConsulta($cod_consulta) {
    $cbd = new ConexionBD();
    $sql = "DELETE FROM consultas WHERE cod_consulta = ?";
    $parametros = array($cod_consulta);
    $resultado = $cbd->consultaManipulacion($sql, $parametros);
    $cbd->cerrarConexion();

    return $resultado;
}

