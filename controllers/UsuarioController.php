<?php
require_once '../config/db.php';
require_once '../models/Usuario.php';

$modeloUsuario = new Usuario($conexion);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($modeloUsuario->registrar($_POST['nombre'], $_POST['email'], $_POST['password'])) {
        echo "<script>
                alert('¡Registro exitoso!'); 
                window.location.href='../views/index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al registrar. Inténtalo de nuevo.'); 
                window.location.href='../views/registro.php';
              </script>";
    }
} 

$listaUsuarios = $modeloUsuario->listarUsuarios();
?>