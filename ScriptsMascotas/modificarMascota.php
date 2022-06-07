<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$codIdentificador = $_REQUEST['codIdentificador'];
$foto = $_REQUEST['foto'];
$descripcion = $_REQUEST['descripcion'];

if (isset($codIdentificador) && isset($foto) && isset($descripcion)) {
    $resultado = modificarMascota($foto, $descripcion, $codIdentificador);
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

function modificarMascota($foto, $descripcion, $codIdentificador) {
    $cbd = new ConexionBD();
    $sql = "UPDATE mascotas set foto = ?, descripcion = ? where codIdentificador = ?";

    $parametros = array($foto, $descripcion, $codIdentificador);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
