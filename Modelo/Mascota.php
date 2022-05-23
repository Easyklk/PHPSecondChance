<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mascota
 *
 * @author Isaac-PC
 */
class Mascota {

    private $codigoIdentificador;
    private $nombre;
    private $especie;
    private $raza;
    private $fechaAcogida;
    private $foto;
    private $cifProtectora;
    private $descripcion;

    function __construct() {
        $this->codigoIdentificador = "";
        $this->nombre = "";
        $this->especie = "";
        $this->raza = "";
        $this->fechaAcogida = "";
        $this->foto = "";
        $this->cifProtectora = "";
        $this->descripcion = "";
    }

    function getCodigoIdentificador() {
        return $this->codigoIdentificador;
    }

    function setCodigoIdentificador($codigoIdentificador) {
        $this->codigoIdentificador = $codigoIdentificador;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getEspecie() {
        return $this->especie;
    }

    function setEspecie($especie) {
        $this->especie = $especie;
    }

    function getRaza() {
        return $this->raza;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function getFechaAcogida() {
        return $this->fechaAcogida;
    }

    function setFechaAcogida($fechaAcogida) {
        $this->fechaAcogida = $fechaAcogida;
    }

    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function getCifProtectora() {
        return $this->cifProtectora;
    }

    function setCifProtectora($cifProtectora) {
        $this->cifProtectora = $cifProtectora;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function toString() {
        return "Mascota{" . "Identificador:" . $this->codigoIdentificador . ", Nombre:" . $this->nombre . ", Especie:" . $this->especie . ", Raza:" . $this->raza . ", Fecha de Acogida:" . $this->fechaAcogida . ", Foto:" . $this->foto . ", CIF Protectora:" . $this->cifProtectora . ", Descripcion:" . $this->descripcion . strval('}');
    }

}
