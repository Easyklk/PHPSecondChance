<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Voluntario
 *
 * @author Isaac-PC
 */
class Voluntario {

    private $dni;
    private $nombre;
    private $apellidos;
    private $email;

    function __construct($dni, $nombre, $apellidos, $email) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    function getDni() {
        return $this->dni;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function getMail() {
        return $this->email;
    }

    function setMail($email) {
        $this->email = $email;
    }

    function toString() {
        return "Voluntario{" . "DNI:" . $this->dni . ", Nombre:" . $this->nombre . ", Apellidos:" . $this->apellidos . ", email:" . $this->email . strval('}');
    }

}
