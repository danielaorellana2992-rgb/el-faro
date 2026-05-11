<?php

require_once __DIR__ . '/../config/db.php';

class Conexion {
    protected $db;

    public function __construct() {
        try {
            // Establecemos la conexión usando las constantes de db.php
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $this->db = new PDO($dsn, DB_USER, DB_PASS);
            
            // Configuramos PDO para que lance excepciones en caso de error
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            die("Error en la conexión de El Faro: " . $e->getMessage());
        }
    }

    // MÉTODO PARA CONSULTAR (Select)
    public function consultar($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    // MÉTODO PARA INSERTAR / ACTUALIZAR / ELIMINAR
    public function ejecutar($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);

    }
    public function obtenerConexion() {
        return $this->db;
    }
}
?>