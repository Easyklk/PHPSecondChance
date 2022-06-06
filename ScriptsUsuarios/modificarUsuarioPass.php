<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($email) && isset($password)) {
    $resultado = insertarUsuario($password, $email);
    if ($resultado > 0) {
        echo Protocolo::CR_OK_INSERT;
    } else {
        if ($resultado == -1) {
            echo Protocolo::CR_ERROR_KP_REPETED;
        } else {
            echo Protocolo::CR_ERROR_INSERT;
        }
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function insertarUsuario($password, $email) {
    $cbd = new ConexionBD();
    $sql = "UPDATE usuarios SET password=? WHERE email=?";
    $parametros = array($password, $email);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
