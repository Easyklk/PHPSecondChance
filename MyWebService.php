<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (!defined('BT_ROOT')) {
    define('BT_ROOT', dirname(__FILE__) . '/');
}

require_once (BT_ROOT . 'Controlador/Config.php');
require_once (BT_ROOT . 'Controlador/ConexionBD.php');

//Clases modelo
require_once (BT_ROOT . 'Modelo/Consulta.php');
require_once (BT_ROOT . 'Modelo/Mascota.php');
require_once (BT_ROOT . 'Modelo/Protectora.php');
require_once (BT_ROOT . 'Modelo/Usuario.php');
require_once (BT_ROOT . 'Modelo/Voluntario.php');

