<?php
require_once __DIR__ . '/../controllers/ArticuloController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Faro - Negocios</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/estilos.css">
<style>
body{ font-family: 'Montserrat', sans-serif; background-color: #f4f7f6; }
.noticia{ transition: 0.3s; }
.noticia:hover{ background-color: #000; color: #fff; }
.noticia:hover p, .noticia:hover h5, .noticia:hover span{ color: #fff !important; }
.video-container{ position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; }
.video-container iframe{ position: absolute; top:0; left:0; width:100%; height:100%; }
</style>
</head>
<body>

<div class="alert alert-success text-center mb-0 p-2 rounded-0">
📈 <strong>MERCADOS:</strong> El cobre y exportaciones chilenas muestran crecimiento.
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
<li class="nav-item"><a class="nav-link" href="deportes.php">Deportes</a></li>
<li class="nav-item"><a class="nav-link active" href="negocios.php">Negocios</a></li>
</ul>
</div>
<div class="d-flex align-items-center">
<small id="reloj-digital" class="text-white me-3"></small>
<small class="text-white me-3">
<i class="bi bi-newspaper"></i>
Artículos: <span id="contador-articulos"><?php echo count($listaArticulos); ?></span>
</small>
</div>
</div>
</nav>

<main class="container my-5">
<section class="row mb-5 justify-content-center">
<div class="col-lg-10">
<div class="video-container shadow">
<iframe src="https://www.youtube.com/embed/XHS84m0qaL0" allowfullscreen></iframe>
</div>
</div>
</section>

<h3 class="mb-4 text-primary"><i class="bi bi-newspaper"></i> Actualidad Económica</h3>
<div class="row">
    <!-- Contenido Principal -->
    <div class="col-lg-8">
        <section id="contenedor-noticias">
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🔍 Microsoft bajo la lupa en el Reino Unido</h5>
                        <p><strong>Categoría:</strong> Negocios <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La Autoridad de Mercados y Competencia (CMA) inició hoy una investigación formal para determinar si Microsoft posee un "Estatus de Mercado Estratégico" que podría estar limitando la competencia en el software empresarial.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⛏️ Repunte Minero impulsa a Sigdo Koppers</h5>
                        <p><strong>Categoría:</strong> Negocios <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La gigante chilena reportó proyecciones muy optimistas para el cierre de 2026, apoyada en una cartera de proyectos de expansión minera y servicios industriales que han crecido un 15% este trimestre.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🤖 Amazon y la IA disparan ingresos</h5>
                        <p><strong>Categoría:</strong> Negocios <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Amazon reportó que su división de nube (AWS) alcanzó cifras récord gracias a la demanda masiva de infraestructura para Inteligencia Artificial generativa, consolidando su liderazgo frente a Google y Microsoft.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⚖️ Cero aranceles en EE.UU.</h5>
                        <p><strong>Categoría:</strong> Negocios <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Tras un fallo histórico de la Corte Suprema, las aduanas de Estados Unidos comenzaron esta semana a reembolsar aranceles a miles de empresas importadoras, un movimiento que promete inyectar liquidez inmediata a los mercados internacionales.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⛽ Crisis Energética en Cuba</h5>
                        <p><strong>Categoría:</strong> Negocios <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La isla enfrenta una situación crítica por falta de combustible este jueves 14 de mayo, afectando la producción industrial y obligando a las empresas locales a operar con horarios restringidos para ahorrar energía.</p>
                    </div>
                </div>
            </div>
            <?php foreach ($listaArticulos as $noticia): ?>
                <?php if (trim($noticia['titulo']) === 'Inversión en energías renovables' || trim($noticia['titulo']) === 'Estadísticas del campeonato') continue; ?>
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>📈 <?php echo htmlspecialchars($noticia['titulo']); ?></h5>
                        <p><strong>Categoría:</strong> <?php echo htmlspecialchars($noticia['categoria']); ?> <span class="float-end reading-time"><i class="bi bi-clock"></i> Calculando...</span></p>
                        <p><?php echo htmlspecialchars($noticia['contenido']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
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
                        <i class="bi bi-globe"></i> Bloomberg
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Reuters
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Financial Times
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-bottom">
                        <i class="bi bi-globe"></i> Mercado de Valores
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent">
                        <i class="bi bi-globe"></i> Economía.com
                    </a>
                </div>
            </div>
        </div>

        <!-- Información Financiera -->
        <div class="card shadow-sm" style="background-color: #e8f4f8; border: none;">
            <div class="card-body">
                <h6 class="fw-bold mb-2">Índices</h6>
                <p class="small mb-1"><strong>IPSA (Chile):</strong> <span class="text-success">+1.45%</span></p>
                <p class="small mb-1"><strong>S&P 500:</strong> <span class="text-success">+0.82%</span></p>
                <p class="small"><strong>BTC/USD:</strong> <span class="text-danger">-2.15%</span></p>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Comentarios -->
<section class="mt-5 p-4 rounded" style="background-color: #f5f5f5;">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h4 class="fw-bold mb-4"><i class="bi bi-chat-dots"></i> Comentarios y Opiniones</h4>
            <div id="comments-list-negocios">
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Roberto Silva</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">Excelente análisis sobre las investigaciones de Microsoft. Las regulaciones digitales son necesarias para la competencia justa.</p>
                    </div>
                </div>
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Sofía Mendez</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">El crecimiento de Sigdo Koppers es impresionante. La minería sigue siendo fundamental para la economía chilena.</p>
                    </div>
                </div>
                <div class="card mb-3 border-0" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Diego Rodríguez</h6>
                        <p class="text-muted small mb-2">14 de mayo de 2026</p>
                        <p class="card-text">AWS y la IA generativa están revolucionando los negocios. ¿Cómo se adaptarán las empresas tradicionales?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-3 shadow-sm border-0">
                <h5 class="fw-bold mb-3">Deja tu comentario</h5>
                <form id="commentFormNegocios">
                    <div class="mb-3">
                        <input type="text" id="commentNameNegocios" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <textarea id="commentTextNegocios" class="form-control" rows="4" placeholder="Escribe tu comentario" required></textarea>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Enviar comentario</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
<h3 class="text-primary mb-3"><i class="bi bi-pencil-square"></i> Agregar Noticia</h3>
<form action="../controllers/ArticuloController.php" method="POST">
<input type="text" name="titulo" class="form-control mb-2" placeholder="Título" required>
<input type="text" name="categoria" class="form-control mb-2" placeholder="Categoría" required>
<textarea name="contenido" class="form-control mb-2" placeholder="Descripción" required></textarea>
<input type="hidden" name="autor" value="Admin Negocios">
<button type="submit" class="btn btn-success"><i class="bi bi-plus-circle"></i> Agregar y Guardar</button>
</form>
</section>

<section class="container mt-4 text-center">
<h3 class="text-primary"><i class="bi bi-volume-up-fill"></i> Audio ambiental</h3>
<audio id="audioAmbiente" controls autoplay loop muted>
<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3">
</audio>
<br><br>
<button class="btn btn-warning" onclick="document.getElementById('audioAmbiente').muted=false;">
Activar sonido
</button>
</section>


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
    const commentFormNegocios = document.getElementById('commentFormNegocios');
    if (commentFormNegocios) {
        commentFormNegocios.addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('commentNameNegocios').value.trim();
            const text = document.getElementById('commentTextNegocios').value.trim();
            if (!name || !text) return;
            const list = document.getElementById('comments-list-negocios');
            const commentCard = document.createElement('div');
            commentCard.className = 'card mb-3 border-0';
            commentCard.style.backgroundColor = '#ffffff';
            commentCard.innerHTML = `<div class="card-body"><h6 class="card-title fw-bold">${name}</h6><p class="text-muted small mb-2">${new Date().toLocaleDateString('es-CL')}</p><p class="card-text">${text}</p></div>`;
            list.prepend(commentCard);
            commentFormNegocios.reset();
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