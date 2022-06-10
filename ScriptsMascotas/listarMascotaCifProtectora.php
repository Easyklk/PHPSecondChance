<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cif_Protectora = $_REQUEST['cif_Protectora'];

if (isset($cif_Protectora)) {
    $resultado = consulta($cif_Protectora);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($cif_Protectora) {
    $cbd = new ConexionBD();
    $sql = "Select * from mascotas where cif_Protectora ='" . $cif_Protectora . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
