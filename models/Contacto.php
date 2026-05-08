<?php
require_once 'Conexion.php';

class Contacto extends Conexion {
    private $db;

    public function __construct() {
        parent::__construct();
    }

    public function guardarMensaje($nombre, $email, $mensaje) {
        $sql = "CALL sp_InsertarContacto(?, ?, ?)";
        return $this->ejecutar($sql, [$nombre, $email, $mensaje]);
    }
}
?>