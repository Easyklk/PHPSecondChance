<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$codConsulta = $_REQUEST['cod_consulta'];
if (isset($codConsulta)) {
    $resultado = consulta($codConsulta);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($codConsulta) {
    $cbd = new ConexionBD();
    $sql = "Select * from consultas where cod_consulta='" . $codConsulta . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
