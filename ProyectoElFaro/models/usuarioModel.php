<?php

class UsuarioModel {

    private $conexion;

    public function __construct() {

        $this->conexion = new mysqli("localhost", "root", "", "elfaro");

        if($this->conexion->connect_error){
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function registrarUsuario($nombre, $apellido, $correo, $usuario, $password) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre, apellido, correo, usuario, password)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "sssss",
            $nombre,
            $apellido,
            $correo,
            $usuario,
            $passwordHash
        );

        return $stmt->execute();
    }
}
?>