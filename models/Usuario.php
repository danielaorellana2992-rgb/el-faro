<?php
require_once 'Conexion.php';

class Usuario extends Conexion {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function registrar($nombre, $email, $password) {
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute([
            ':nombre' => $nombre, 
            ':email' => $email, 
            ':password' => $password_hash
        ]);
    }

    public function listarUsuarios() {
        $sql = "SELECT id, nombre, email, fecha_registro FROM usuarios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>