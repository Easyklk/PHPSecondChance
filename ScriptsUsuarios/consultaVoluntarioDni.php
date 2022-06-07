<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$dni = $_REQUEST['dni'];

if (isset($dni)) {
    $resultado = consulta($dni);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($dni) {
    $cbd = new ConexionBD();
    $sql = "Select * from voluntarios where dni ='" . $dni . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
