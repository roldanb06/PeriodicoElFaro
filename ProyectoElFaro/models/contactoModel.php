<?php

class ContactoModel {

    private $conexion;

    public function __construct() {

        $this->conexion = new mysqli("localhost", "root", "", "elfaro");

        if($this->conexion->connect_error){
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function guardarContacto($nombre, $correo, $mensaje) {

        $sql = "INSERT INTO contactos (nombre, correo, mensaje)
                VALUES (?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "sss",
            $nombre,
            $correo,
            $mensaje
        );

        return $stmt->execute();
    }
}
?>