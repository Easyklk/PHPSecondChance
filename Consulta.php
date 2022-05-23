<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Consulta
 *
 * @author Isaac-PC
 */
class Consulta {

    //put your code here

    private $codConsulta;
    private $codMascota;
    private $dniVoluntario;
    private $horario;
    private $informacion;

    public function __construct($codConsulta, $codMascota, $dniVoluntario, $horario, $informacion) {
        $this->codConsulta = $codConsulta;
        $this->codMascota = $codMascota;
        $this->dniVoluntario = $dniVoluntario;
        $this->horario = $horario;
        $this->informacion = $informacion;
    }

    function getCodConsulta() {
        return $this->codConsulta;
    }

    function setCodConsulta($codConsulta): void {
        $this->codConsulta = $codConsulta;
    }

    function getCodMascota() {
        return $this->codMascota;
    }

    function setCodMascota($codMascota): void {
        $this->codMascota = $codMascota;
    }

    function getDniVoluntario() {
        return $this->dniVoluntario;
    }

    function setDniVoluntario($dniVoluntario): void {
        $this->dniVoluntario = $dniVoluntario;
    }

    function getHorario() {
        return $this->horario;
    }

    function setHorario($horario): void {
        $this->horario = $horario;
    }

    function getInformacion() {
        return $this->informacion;
    }

    function setInformacion($informacion): void {
        $this->informacion = $informacion;
    }

}
