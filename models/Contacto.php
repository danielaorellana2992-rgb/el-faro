<?php
class Contacto {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function guardarMensaje($nombre, $email, $mensaje) {
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $email, $mensaje]);
    }
}
?>