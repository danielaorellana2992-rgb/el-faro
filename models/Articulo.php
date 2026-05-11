<?php
require_once __DIR__ . '/Conexion.php';

class Articulo {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->obtenerConexion();
    }

    public function obtenerTodos() {
        $query = 'SELECT * FROM articulos ORDER BY fecha_publicacion DESC';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($titulo, $contenido, $autor, $categoria) {
        $query = 'INSERT INTO articulos (titulo, contenido, autor, categoria) VALUES (:titulo, :contenido, :autor, :categoria)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':contenido', $contenido);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':categoria', $categoria);
        return $stmt->execute();
    }
}
?>