<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$email = $_REQUEST['email'];

if (isset($email) && !empty($email)) {

    $resultado = eliminarUsuario($email);

    //echo $resultado;
    if ($resultado > 0) {
        echo Protocolo::CR_OK_DELETE;
    } else {
        echo Protocolo::CR_ERROR_DELETE;
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function eliminarUsuario($email) {
    $cbd = new ConexionBD();
    $sql = "DELETE FROM usuarios WHERE email = ?";
    $parametros = array($email);
    $resultado = $cbd->consultaManipulacion($sql, $parametros);
    $cbd->cerrarConexion();

    return $resultado;
}
