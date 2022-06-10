<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$codIdentificador = $_REQUEST['codIdentificador'];
$cif_Protectora = $_REQUEST['cif_Protectora'];

if (isset($codIdentificador)) {
    $resultado = consulta($codIdentificador, $cif_Protectora);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($codIdentificador, $cif_Protectora) {
    $cbd = new ConexionBD();
    $sql = "Select * from mascotas where codIdentificador ='" . $codIdentificador . "' AND cif_Protectora='" . $cif_Protectora . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
