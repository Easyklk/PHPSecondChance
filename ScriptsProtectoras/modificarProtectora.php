<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cifViejo = $_REQUEST['cif'];
$cifNuevo = $_REQUEST['cifNuevo'];
$nombre_protectora = $_REQUEST['nombre_protectora'];
$razon_soocial = $_REQUEST['razon_social'];
$telefono = $_REQUEST['telefono'];
$ubicacion = $_REQUEST['ubicacion'];

if (isset($cifViejo) && isset($cifNuevo) && isset($nombre_protectora) && isset($razon_soocial) && isset($nombre_protectora) && isset($telefono) && isset($ubicacion)) {
    $resultado = modificarProtectora($cifNuevo, $nombre_protectora, $razon_soocial, $telefono, $ubicacion, $cifViejo);
    if ($resultado > 0) {
        echo Protocolo::CR_OK_INSERT;
    } else {

        if ($resultado == -1) {
            echo Protocolo::CR_ERROR_KP_REPETED;
        } else {
            echo Protocolo::CR_ERROR_INSERT;
        }
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function modificarProtectora($cifNuevo, $nombre, $razonSocial, $telefono, $ubicacion, $cifViejo) {
    $cbd = new ConexionBD();
    $sql = "UPDATE protectoras SET cif=?, nombre_protectora=?, razon_social=?, telefono=?, ubicacion=? WHERE cif =?";
    $parametros = array($cifNuevo, $nombre, $razonSocial, $telefono, $ubicacion, $cifViejo);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
