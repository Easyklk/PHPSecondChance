<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';

$resultado = listarConsulta();
echo json_encode($resultado);

function listarConsulta() {
    $cbd = new ConexionBD();
    $sql = 'SELECT * FROM consultas';
    $filas = $cbd->consultaSeleccion($sql);

    return $filas;
}
