<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cif = $_REQUEST['cif'];
$nombre_protectora = $_REQUEST['nombre_protectora'];
$razon_soocial = $_REQUEST['razon_social'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$ubicacion = $_REQUEST['ubicacion'];

if (isset($cif) && isset($nombre_protectora) && isset($razon_soocial) && isset($email) && isset($nombre_protectora) && isset($telefono) && isset($ubicacion)) {
    $resultado = insertarProtectora($cif, $nombre_protectora, $razon_soocial, $email, $telefono, $ubicacion);

//echo $resultado;
    if ($resultado > 0) {
        echo Protocolo::CR_OK_INSERT;
    } else {

// echo Protocolo::CR_ERROR_INSERT;

        if ($resultado == -1) {
            echo Protocolo::CR_ERROR_KP_REPETED;
        } else {
            echo Protocolo::CR_ERROR_INSERT;
        }
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function insertarProtectora($cif, $nombre, $razonSocial, $email, $telefono, $ubicacion) {
    $cbd = new ConexionBD();
    $sql = "INSERT INTO protectoras VALUES (?,?,?,?,?,?)";
    $parametros = array($cif, $nombre, $razonSocial, $email, $telefono, $ubicacion);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
