<?php

require_once '../datos/Conexion.php';

class Sesion extends Conexion {

    public function iniciarSesion($email, $password) {
        $sql = "SELECT * FROM usuarios WHERE email= :nom";

        $sentencia = $this->dblink->prepare($sql);
        $sentencia->bindParam(":nom", $email);
        $sentencia->execute();

        if ($sentencia->rowCount() <= 0) {
	    echo "ERROR SENTENCIA";
            return FALSE;
        }

        $resultado = $sentencia->fetchObject();

        if ($resultado->password == ($password)) {
            return TRUE;
        }

        return FALSE;
    }

    public function obtenerNombreUsuario($email) {
        $sql = "SELECT email FROM usuarios WHERE email= :nom";

        $sentencia = $this->dblink->prepare($sql);
        $sentencia->bindParam(":nom", $email);
        $sentencia->execute();

        $resultado = $sentencia->fetchObject();

        return $resultado->nombre;
    }

}
?>