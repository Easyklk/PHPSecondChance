<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Protectora
 *
 * @author Isaac-PC
 */
class Protectora {

    private $cif;
    private $nombre;
    private $razonSocial;
    private $email;
    private $telefono;
    private $ubicacion;

    function __construct($cif, $nombreProtectora, $razonSocial, $email, $telefono, $ubicacion) {
        $this->cif = $cif;
        $this->nombre = $nombreProtectora;
        $this->razonSocial = $razonSocial;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->ubicacion = $ubicacion;
    }

    function getCif() {
        return $this->cif;
    }

    function setCif($cif) {
        $this->cif = $cif;
    }

    function getNombreProtectora() {
        return $this->nombre;
    }

    function setNombreProtectora($nombreProtectora) {
        $this->nombre = $nombreProtectora;
    }

    function getRazonSocial() {
        return $this->razonSocial;
    }

    function setRazonSocial($razonSocial) {
        $this->razonSocial = $razonSocial;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function toString() {
        return "Protectora{" . "CIF:" . $this->cif . ", Nombre:" . $this->nombre . ", Razon Social:" . $this->razonSocial . ", email:" . $this->email . ", Telefono:" . $this->telefono . ", Ubicacion:" . $this->ubicacion . strval('}');
    }

}
