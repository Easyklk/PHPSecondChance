<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/**
 * Description of ConexionBD
 *
 * @author Isaac-PC
 */
class ConexionBD {

    private $conn;

    function __construct() {
        $this->conn = null;
    }

    function abrirConexion() {
        $datos = 'mysql:host=' . DB_HOST . ';dbname='
                . DB_NAME;
        try {
            $this->conn = new PDO($datos, DB_USER,
                    DB_PASSWORD);
        } catch (PDOException $e) {
            echo 'Error conexion' . $e->getMessage();
        }

        return $this->conn;
    }

    function consultaSeleccion($sql) {
        $conexion = $this->abrirConexion();

        $consulta = $conexion->query($sql);

        $filas = array();

        while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
            $filas[] = $fila;
            //array_push($filas,$fila);          
        }

        $this->cerrarConexion();
        return $filas;
    }

    function consultaUnaSeleccion($sql) {
        $conexion = $this->abrirConexion();

        $consulta = $conexion->query($sql);

        $filas = array();

        while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
            $filas[] = $fila;
            //array_push($filas,$fila);          
        }

        $this->cerrarConexion();
        return $filas;
    }

    function consultaManipulacion($sql, $parametros) {
        $resultado = false;
        $conexion = $this->abrirConexion();

        $sentencia = $conexion->prepare($sql);

        if ($sentencia) {
            $resultado = $sentencia->execute($parametros);
        }
        $this->cerrarConexion();
        return $resultado;
    }

    function cerrarConexion() {
        $this->conn = null;
    }

}
