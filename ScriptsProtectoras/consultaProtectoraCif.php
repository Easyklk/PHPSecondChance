<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$cif = $_REQUEST['cif'];

if (isset($cif)) {
    $resultado = consulta($cif);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($cif) {
    $cbd = new ConexionBD();
    $sql = "Select * from protectoras where cif ='" . $cif . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
