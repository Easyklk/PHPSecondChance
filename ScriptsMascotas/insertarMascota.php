<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$codIdentificador = $_REQUEST['codIdentificador'];
$nombre_protectora = $_REQUEST['nombre'];
$especie = $_REQUEST['especie'];
$raza = $_REQUEST['raza'];
$fechaAcogida = $_REQUEST['fechaAcogida'];
$foto = $_REQUEST['foto'];
$cifProtectora = $_REQUEST['cifProtectora'];
$descripcion = $_REQUEST['descripcion'];

if (isset($codIdentificador) && isset($nombre_protectora) && isset($especie) && isset($raza) && isset($fechaAcogida) && isset($foto) && isset($cifProtectora) && isset($descripcion)) {
    $resultado = insertarMascota($codIdentificador, $nombre_protectora, $especie, $raza, $fechaAcogida, $foto, $cifProtectora, $descripcion);
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

function insertarMascota($codIdentificador, $nombre, $especie, $raza, $fechaAcogida, $foto, $cifProtectora, $descripcion) {
    $cbd = new ConexionBD();
    $sql = "INSERT INTO mascotas VALUES (?,?,?,?,?,?,?,?)";
    $parametros = array($codIdentificador, $nombre, $especie, $raza, $fechaAcogida, $foto, $cifProtectora, $descripcion);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
