<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$voluntario = $_REQUEST['voluntario'];
$protectora = $_REQUEST['protectora'];
$administrador = $_REQUEST['administrador'];

if (isset($email) && isset($password) && isset($voluntario) && isset($protectora) && isset($administrador)) {
    $resultado = insertarUsuario($email, $password, $voluntario, $protectora, $administrador);
//echo $resultado;
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

function insertarUsuario($email, $password, $voluntario, $protectora, $administrador) {
    $cbd = new ConexionBD();
    $sql = "INSERT INTO usuarios VALUES (?,?,?,?,?)";
    $parametros = array($email, $password, $voluntario, $protectora, $administrador);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
