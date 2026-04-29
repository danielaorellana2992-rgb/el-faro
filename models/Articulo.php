<?php
// Usamos la ruta absoluta para no fallar
require_once __DIR__ . '/../config/db.php';

class Articulo {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM articulos ORDER BY fecha_publicacion DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($titulo, $contenido, $autor, $categoria) {
        $query = "INSERT INTO articulos (titulo, contenido, autor, categoria) VALUES (:titulo, :contenido, :autor, :categoria)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':contenido', $contenido);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':categoria', $categoria);
        return $stmt->execute();
    }
}
?>