<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    try {
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (:nom, :em, :msj)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([':nom' => $nombre, ':em' => $email, ':msj' => $mensaje]);
        
        echo "<script>alert('Mensaje enviado. ¡Gracias por contactar a El Faro!'); window.location.href='../views/contacto.php';</script>";
    } catch (PDOException $e) {
        echo "Error al enviar: " . $e->getMessage();
    }
}
?>