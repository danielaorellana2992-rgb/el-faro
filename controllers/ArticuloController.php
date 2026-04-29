<?php
require_once __DIR__ . '/../models/Articulo.php';

$articuloModel = new Articulo();

// Manejo de envíos desde el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

    if ($articuloModel->guardar($titulo, $contenido, $autor, $categoria)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

// Cargar y filtrar noticias
$todasLasNoticias = $articuloModel->obtenerTodos();
$listaArticulos = [];

$paginaActual = basename($_SERVER['PHP_SELF']);

foreach ($todasLasNoticias as $noticia) {
    if ($paginaActual == 'deportes.php' && $noticia['categoria'] == 'Deportes') {
        $listaArticulos[] = $noticia;
    } elseif ($paginaActual == 'negocios.php' && $noticia['categoria'] == 'Negocios') {
        $listaArticulos[] = $noticia;
    }
}
?>