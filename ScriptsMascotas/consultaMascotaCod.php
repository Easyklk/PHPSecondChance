<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$codIdentificador = $_REQUEST['codIdentificador'];

if (isset($codIdentificador)) {
    $resultado = consulta($codIdentificador);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($codIdentificador) {
    $cbd = new ConexionBD();
    $sql = "Select * from mascotas where codIdentificador ='" . $codIdentificador . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
