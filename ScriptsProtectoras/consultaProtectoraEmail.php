<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';
$email = $_REQUEST['email'];
if (isset($email)) {
    $resultado = consulta($email);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($email) {
    $cbd = new ConexionBD();
    $sql = "Select * from protectoras where email ='" . $email . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
