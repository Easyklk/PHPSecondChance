<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';

$sql = "Select email, password from usuarios;";

$cbd = new ConexionBD();
$resultado = $cbd->consultaSeleccion($sql);

if ($resultado) {
    $resultado = json_encode($resultado);
}

echo $resultado;
