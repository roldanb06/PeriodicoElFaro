<?php

require_once("../models/usuarioModel.php");

if(isset($_POST['registrarUsuario'])){

    // Capturar datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Crear objeto del modelo
    $usuarioModel = new UsuarioModel();

    // Enviar datos al modelo
    $resultado = $usuarioModel->registrarUsuario(
        $nombre,
        $apellido,
        $correo,
        $usuario,
        $password
    );

    // Validar respuesta
    if($resultado){
        header("Location: ../index.php?registro=ok");
        exit();
    } else {
        header("Location: ../index.php?registro=error");
        exit();
    }
}
?>