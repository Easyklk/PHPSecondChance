<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$resultado = listarMascotas();
echo json_encode($resultado);

function listarMascotas() {
    $cbd = new ConexionBD();
    $sql = 'SELECT * FROM mascotas;';
    $filas = $cbd->consultaSeleccion($sql);

    return $filas;
}
