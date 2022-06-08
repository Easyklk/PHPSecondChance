<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cod_consulta = $_REQUEST['cod_consulta'];
if (isset($cod_consulta)) {
    $resultado = consulta($cod_consulta);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($cod_consulta) {
    $cbd = new ConexionBD();
    $sql = "Select * from consultas where cod_consulta=" . $cod_consulta;
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
