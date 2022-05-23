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
    private $administrador;

    function __construct($email, $password, $voluntario, $administrador) {
        $this->email = $email;
        $this->password = $password;
        $this->voluntario = $voluntario;
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

    function isVoluntario() {
        return $this->voluntario;
    }

    function setVoluntario($voluntario) {
        $this->voluntario = $voluntario;
    }

    function toString() {
        return "Usuario{" . "email:" . $this->email . ", es voluntario:" . strval($this->voluntario) . ", es administrador:" . strval($this->administrador) . strval('}');
    }

}
