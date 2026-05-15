<?php
require_once __DIR__ . '/../controllers/ArticuloController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Faro - Deportes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/estilos.css">

<style>
body {
    font-family: 'Montserrat', sans-serif;
    background-color: #f8f9fa;
}
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.video-container iframe {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 12px;
}
.noticia {
    transition: 0.3s;
}
.noticia:hover {
    background-color: #000 !important;
    color: #fff !important;
}
.noticia:hover p,
.noticia:hover h5 {
    color: #fff !important;
}
</style>
</head>
<body>

<div class="alert alert-dark text-center mb-0 p-2 rounded-0">
⚽ <strong>¡EN VIVO!</strong> Noticias deportivas en tiempo real.
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="index.php">EL FARO</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-center" id="menu">
<ul class="navbar-nav text-center">
<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="negocios.php">Negocios</a></li>
<li class="nav-item"><a class="nav-link active" href="deportes.php">Deportes</a></li>
</ul>
</div>
<div class="d-flex align-items-center">
<small id="reloj-digital" class="text-white me-3"></small>
<small class="text-white me-3">
<i class="bi bi-newspaper"></i>
Artículos deportivos:
<span id="contador-articulos"><?php echo count($listaArticulos); ?></span>
</small>
</div>
</div>
</nav>

<main class="container my-5">
<div class="row justify-content-center mb-5">
<div class="col-lg-10">
<div class="video-container shadow">
<iframe src="https://www.youtube.com/embed/nmQwsteNNQ8" allowfullscreen></iframe>
</div>
</div>
</div>

<h3 class="fw-bold mb-4">Últimas Noticias Deportivas</h3>
<div class="row">
    <!-- Contenido Principal -->
    <div class="col-lg-8">
        <div id="contenedor-noticias">
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⛳ PGA Championship 2026</h5>
                        <p><strong>Categoría:</strong> Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Hoy, 14 de mayo, arranca oficialmente el segundo "Major" de golf de la temporada en el Aronimink Golf Club, Pensilvania. Los ojos están puestos en si los talentos emergentes podrán superar las condiciones climáticas de esta primavera.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🚴 Giro de Italia en marcha</h5>
                        <p><strong>Categoría:</strong> Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La icónica carrera de ciclismo entró hoy en su segunda semana cruzando territorio italiano. Los equipos están ajustando estrategias para las etapas de alta montaña que definirán la maglia rosa este fin de semana.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🎾 Expectación por Roland-Garros</h5>
                        <p><strong>Categoría:</strong> Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>A solo 10 días de que comience el Grand Slam de París (24 de mayo), los mejores tenistas del mundo ya se encuentran en Europa ajustando su juego en tierra batida. Hay gran incertidumbre por el estado físico de los veteranos del circuito.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🏎️ Automovilismo: Mercedes sorprende en las pruebas de Imola</h5>
                        <p><strong>Categoría:</strong> Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Hoy jueves, los equipos de Fórmula 1 han comenzado los preparativos en el Autodromo Enzo e Dino Ferrari para el Gran Premio de Emilia-Romaña de este fin de semana. Mercedes ha presentado un paquete de mejoras aerodinámicas en los pontones que ha dejado a Lewis Hamilton con el mejor tiempo en las tandas de simulación matutinas. La expectativa es alta para ver si finalmente pueden recortar la distancia con el dominio de Red Bull en suelo europeo.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🏀 NBA: Las Finales de Conferencia están que arden</h5>
                        <p><strong>Categoría:</strong> Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Tras los resultados de anoche, los Playoffs de la NBA entran en su fase más crítica. Hoy se analizan las estadísticas de cara al Juego 1 de las Finales de Conferencia que arrancan este fin de semana. La gran sorpresa ha sido la consistencia defensiva de los equipos jóvenes, que han logrado desplazar a varios favoritos veteranos. Los analistas deportivos coinciden en que estamos ante uno de los cambios de guardia más importantes en la historia reciente de la liga.</p>
                    </div>
                </div>
            </div>
            <!-- Aquí se cargan las noticias de la Base de Datos -->
            <?php foreach ($listaArticulos as $noticia): ?>
                <?php if (trim($noticia['titulo']) === 'Estadísticas del campeonato') continue; ?>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⚽ <?php echo htmlspecialchars($noticia['titulo']); ?></h5>
                        <p><strong>Categoría:</strong> <?php echo htmlspecialchars($noticia['categoria']); ?> <span class="float-end reading-time"><i class="bi bi-clock"></i> Calculando...</span></p>
                        <p><?php echo htmlspecialchars($noticia['contenido']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Sidebar: Sitios Asociados -->
    <div class="col-lg-4">
        <div class="card shadow-sm mb-4" style="background-color: #f8f9fa; border: none;">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-3">
                    <i class="bi bi-link-45deg"></i> Sitios Asociados
                </h5>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> ESPN Deportes
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Marca.com
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Goal.com
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Fifa.com
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent">
                        <i class="bi bi-globe"></i> Olympics.com
                    </a>
                </div>
            </div>
        </div>

        <!-- Publicidad o Información Extra -->
        <div class="card shadow-sm" style="background-color: #e8f4f8; border: none;">
            <div class="card-body text-center">
                <h6 class="fw-bold mb-2">Datos Rápidos</h6>
                <p class="small mb-1"><strong>Próximos eventos:</strong></p>
                <p class="small text-muted">Roland-Garros: 24 de mayo</p>
                <p class="small text-muted">Copa América: Junio 2026</p>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Comentarios -->
<section class="mt-5 p-4 rounded" style="background-color: #f5f5f5;">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h4 class="fw-bold mb-4"><i class="bi bi-chat-dots"></i> Comentarios Destacados</h4>
            <div id="comments-list-deportes">
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Juan Pérez</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">Excelente cobertura del PGA Championship. Mercedes está mostrando un desempeño impresionante este año.</p>
                    </div>
                </div>
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">María García</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">El análisis del Giro de Italia es muy detallado. ¡Gracias por mantenerme informada!</p>
                    </div>
                </div>
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Carlos López</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">Las Finales de Conferencia de la NBA serán emocionantes. ¿Quién creen que ganará?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-3 shadow-sm border-0">
                <h5 class="fw-bold mb-3">Deja tu comentario</h5>
                <form id="commentFormDeportes">
                    <div class="mb-3">
                        <input type="text" id="commentNameDeportes" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <textarea id="commentTextDeportes" class="form-control" rows="4" placeholder="Escribe tu comentario" required></textarea>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Enviar comentario</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
<h3 class="text-primary mb-3">
<i class="bi bi-pencil-square"></i> Agregar Noticia
</h3>
<!-- Formulario conectado al controlador -->
<form action="../controllers/ArticuloController.php" method="POST">
<input type="text" name="titulo" class="form-control mb-2" placeholder="Título" required>
<input type="text" name="categoria" class="form-control mb-2" placeholder="Categoría" required>
<textarea name="contenido" class="form-control mb-2" placeholder="Descripción" required></textarea>
<input type="hidden" name="autor" value="Admin Deportes">
<button type="submit" class="btn btn-success">
<i class="bi bi-plus-circle"></i> Agregar y Guardar
</button>
</form>
</section>

<section class="container mt-5 text-center">
<h3 class="text-primary">
<i class="bi bi-volume-up-fill"></i> Audio ambiental
</h3>
<audio id="audioAmbiente" controls autoplay loop muted>
<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3">
</audio>
<br><br>
<button class="btn btn-warning" onclick="document.getElementById('audioAmbiente').muted=false;">
Activar sonido
</button>
</section>
</main>

<footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row text-center text-md-start gy-3">
            <div class="col-md-4">
                <h5>Enlaces</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white text-decoration-none">Inicio</a></li>
                    <li><a href="deportes.php" class="text-white text-decoration-none">Deportes</a></li>
                    <li><a href="negocios.php" class="text-white text-decoration-none">Negocios</a></li>
                    <li><a href="index.php#contacto" class="text-white text-decoration-none">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Redes</h5>
                <p class="mb-1">Instagram</p>
                <p class="mb-1">Facebook</p>
                <p class="mb-1">TikTok</p>
                <p class="mb-0">Threads</p>
            </div>
            <div class="col-md-4">
                <h5>Legal</h5>
                <p class="mb-1">Aviso legal</p>
                <p class="mb-0">Términos y condiciones</p>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="text-center small">
            Créditos El Faro Ingeniería en Informática AIEP online Grupo 11, Taller de Aplicaciones para Internet, Orellana, Betancourt, Orellana
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="JavaScrip.js"></script>
<script>
    const commentFormDeportes = document.getElementById('commentFormDeportes');
    if (commentFormDeportes) {
        commentFormDeportes.addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('commentNameDeportes').value.trim();
            const text = document.getElementById('commentTextDeportes').value.trim();
            if (!name || !text) return;
            const list = document.getElementById('comments-list-deportes');
            const commentCard = document.createElement('div');
            commentCard.className = 'card mb-3 border-0';
            commentCard.style.backgroundColor = '#ffffff';
            commentCard.innerHTML = `<div class="card-body"><h6 class="card-title fw-bold">${name}</h6><p class="text-muted small mb-2">${new Date().toLocaleDateString('es-CL')}</p><p class="card-text">${text}</p></div>`;
            list.prepend(commentCard);
            commentFormDeportes.reset();
        });
    }

    // Calcular tiempo de lectura para noticias dinámicas
    function calculateReadingTime(text) {
        const wordsPerMinute = 200;
        const words = text.trim().split(/\s+/).length;
        const minutes = Math.ceil(words / wordsPerMinute);
        return minutes <= 1 ? '1 min' : `${minutes} min`;
    }

    // Aplicar tiempo de lectura a todas las noticias dinámicas
    document.addEventListener('DOMContentLoaded', function() {
        const readingTimeElements = document.querySelectorAll('.reading-time');
        readingTimeElements.forEach(function(element) {
            const cardBody = element.closest('.card-body');
            const contentParagraph = cardBody.querySelector('p:last-child');
            if (contentParagraph) {
                const readingTime = calculateReadingTime(contentParagraph.textContent);
                element.innerHTML = `<i class="bi bi-clock"></i> ${readingTime}`;
            }
        });
    });
</script>
</body>
</html>