<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//ERROR1: importar
require_once '../MyWebService.php';

$cif = $_REQUEST['cif'];
$nombre = $_REQUEST['nombre'];
$razonSocial = $_REQUEST['razonSocial'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$telefono = $_REQUEST['telefono'];
$ubicacion = $_REQUEST['ubicacion'];

if (isset($cif) && isset($nombre) && isset($razonSocial) && isset($email) && isset($password) && isset($nombre) && isset($telefono) && isset($ubicacion)) {
    $resultado = insertarProtectora($cif, $nombre, $razonSocial, $email, $password, $telefono, $ubicacion);

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

function insertarProtectora($cif, $nombre, $razonSocial, $email, $password, $telefono, $ubicacion) {
    $cbd = new ConexionBD();
    $sql = "INSERT INTO protectoras VALUES (?,?,?,?,?,?,?)";
    $parametros = array($cif, $nombre, $razonSocial, $email, $password, $telefono, $ubicacion);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);

    return $numfilas;
}
