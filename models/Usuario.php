<?php
class Usuario {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function registrar($nombre, $email, $password) {
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute([':nombre' => $nombre, ':email' => $email, ':password' => $password_hash]);
    }
}
?>