<?php

if(isset($_POST['enviarContacto'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    echo "Formulario recibido correctamente";

}
?>