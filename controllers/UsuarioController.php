<?php
require_once '../config/db.php';
require_once '../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = new Usuario($conexion);
    if ($usuario->registrar($_POST['nombre'], $_POST['email'], $_POST['password'])) {
        // Al darle "Aceptar", window.location.href te enviará al index
        echo "<script>
                alert('¡Registro exitoso!'); 
                window.location.href='../views/index.php';
              </script>";
    } else {
        // Por si algo falla, te avisa y te deja en el registro
        echo "<script>
                alert('Error al registrar. Inténtalo de nuevo.'); 
                window.location.href='../views/registro.php';
              </script>";
    }
}
?>