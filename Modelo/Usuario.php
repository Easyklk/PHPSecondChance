<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author Isaac-PC
 */
class Usuario {

    private $email;
    private $password;
    private $voluntario;
    private $protectora;
    private $administrador;

    function __construct($email, $password, $voluntario, $protectora, $administrador) {
        $this->email = $email;
        $this->password = $password;
        $this->voluntario = $voluntario;
        $this->protectora = $protectora;
        $this->administrador = $administrador;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getVoluntario() {
        return $this->voluntario;
    }

    function setVoluntario($voluntario) {
        $this->voluntario = $voluntario;
    }

    function getProtectora() {
        return $this->protectora;
    }

    function setProtectora($protectora) {
        $this->protectora = $protectora;
    }

    function getAdministrador() {
        return $this->administrador;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

    function toString() {
        return "email: " . $this->email . ", Voluntario: " . strval($this->voluntario) . ", Protectoria: " . strval($this->protectora) . ", Administrador: " . strval($this->administrador) . strval('}');
    }

}
