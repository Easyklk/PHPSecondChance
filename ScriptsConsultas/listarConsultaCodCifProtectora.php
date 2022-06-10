<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../MyWebService.php';
require_once '../Modelo/Protocolo.php';

$cod_consulta = $_REQUEST['cod_consulta'];
$cif_protectora = $_REQUEST['cif_protectora'];
if (isset($cod_consulta)) {
    $resultado = consulta($cod_consulta, $cif_protectora);
    echo json_encode($resultado);
} else {
    echo Protocolo::CR_ERROR_SELECT;
}

function consulta($cod_consulta, $cif_protectora) {
    $cbd = new ConexionBD();
    $sql = "SELECT * FROM consultas AS co INNER JOIN mascotas AS mas ON co.cod_mascota = mas.codIdentificador WHERE cod_consulta=" . $cod_consulta . " AND mas.cif_protectora='" . $cif_protectora . "'";
    $filas = $cbd->consultaSeleccion($sql);
    return $filas;
}
