<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';

$resultado = listarProtectora();
echo json_encode($resultado);

function listarProtectora() {
    $cbd = new ConexionBD();
    $sql = 'SELECT * FROM protectoras';
    $filas = $cbd->consultaSeleccion($sql);

    return $filas;
}
