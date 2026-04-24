<?php
$host = "localhost";
$port = "3307"; 
$db   = "elfaro_db";
$user = "root";
$pass = ""; 

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   // echo "¡Conectado exitosamente al puerto 3307 de Laragon!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>