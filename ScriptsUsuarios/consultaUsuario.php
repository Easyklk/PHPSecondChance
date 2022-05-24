<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($email) && isset($password)) {
    $resultado = consulta($email, $password);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($email, $password) {
    $cbd = new ConexionBD();
    $sql = "Select * from usuarios where email ='" . $email . "' and password='" . $password . "' and administrador= 1";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
