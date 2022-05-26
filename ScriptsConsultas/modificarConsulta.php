<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
$codConsulta = $_REQUEST['codConsulta'];
$codMascota = $_REQUEST['codMascota'];
$dniVoluntario = $_REQUEST['dniVoluntario'];
$horario = $_REQUEST['horario'];
$informacion = $_REQUEST['informacion'];

if (isset($codConsulta) && isset($codMascota) && isset($dniVoluntario) && isset($horario) && isset($informacion)) {
    $resultado = modificarConsulta($codConsulta, $codMascota, $dniVoluntario, $horario, $informacion);
    if ($resultado > 0) {
        echo Protocolo::CR_OK_INSERT;
    } else {

        // echo Protocolo::CR_ERROR_INSERT;

        if ($resultado == -1) {
            echo Protocolo::CR_ERROR_KP_REPETED;
        } else {
            echo Protocolo::CR_ERROR_INSERT;
        }
    }
} else {
    echo Protocolo::CR_ERROR_PARAM;
}

function modificarConsulta($codConsulta, $codMascota, $dniVoluntario, $horario, $informacion) {
    $cbd = new ConexionBD();
    $sql = "UPTADE consultas set cod_mascota = ?, dni_voluntario = ?, horario = ?, informacion = ? where cod_consulta = ?";

    $parametros = array($codMascota, $dniVoluntario, $horario, $informacion, $codConsulta);
    $numfilas = $cbd->consultaManipulacion($sql, $parametros);
    return $numfilas;
}
