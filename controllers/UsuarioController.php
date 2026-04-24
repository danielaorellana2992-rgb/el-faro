<?php
require_once '../config/db.php';
require_once '../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = new Usuario($conexion);
    if ($usuario->registrar($_POST['nombre'], $_POST['email'], $_POST['password'])) {
        echo "<script>alert('¡Registro exitoso!'); window.location.href='../views/registro.php';</script>";
    }
}
?>