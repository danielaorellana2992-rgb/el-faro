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

/* VIDEO*/
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

/* HOVER NOTICIAS */
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

<!-- 🔔 AVISO -->
<div class="alert alert-dark text-center mb-0 p-2 rounded-0">
⚽ <strong>¡EN VIVO!</strong> Noticias deportivas en tiempo real.
</div>

<!-- 🔹 HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand fw-bold" href="index.html">EL FARO</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-center" id="menu">
<ul class="navbar-nav text-center">
<li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="negocios.html">Negocios</a></li>
<li class="nav-item"><a class="nav-link active" href="deportes.html">Deportes</a></li>
</ul>
</div>

<!-- RELOJ + CONTADOR -->
<div class="d-flex align-items-center">

<small id="reloj-digital" class="text-white me-3"></small>

<small class="text-white me-3">
<i class="bi bi-newspaper"></i>
Artículos deportivos:
<span id="contador-articulos">6</span>
</small>

</div>

</div>
</nav>

<!-- 🔹 CONTENIDO -->
<main class="container my-5">

<!-- 🎬 VIDEO-->
<div class="row justify-content-center mb-5">
<div class="col-lg-10">
<div class="video-container shadow">
<iframe src="https://www.youtube.com/embed/nmQwsteNNQ8" allowfullscreen></iframe>
</div>
</div>
</div>

<!-- 📰 NOTICIAS -->
<h3 class="fw-bold mb-4">Últimas Noticias Deportivas</h3>

<div class="row">

<!-- 1 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>⚽ Fútbol chileno</h5>
<p><strong>Categoría:</strong> Nacional</p>
<p>Preparación de equipos para nueva temporada.</p>
</div>
</div>
</div>

<!-- 2 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🏀 NBA playoffs</h5>
<p><strong>Categoría:</strong> Internacional</p>
<p>Comienza la lucha por el campeonato.</p>
</div>
</div>
</div>

<!-- 3 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🎾 Tenis ATP</h5>
<p><strong>Categoría:</strong> Mundial</p>
<p>Nuevas promesas en el circuito profesional.</p>
</div>
</div>
</div>

<!-- 4 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🚴 Ciclismo extremo</h5>
<p><strong>Categoría:</strong> Mundial</p>
<p>Competencias de alto rendimiento en Europa.</p>
</div>
</div>
</div>

<!-- 5 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🏆 Juegos Olímpicos</h5>
<p><strong>Categoría:</strong> Internacional</p>
<p>Preparativos para nuevas disciplinas deportivas.</p>
</div>
</div>
</div>

<!-- 6 -->
<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🏄 Surf en Chile</h5>
<p><strong>Categoría:</strong> Extremo</p>
<p>Chile destaca en torneos internacionales de surf.</p>
</div>
</div>
</div>

</div>
<!--  AGREGAR NOTICIA -->
<section class="mt-5">

<h3 class="text-primary mb-3">
<i class="bi bi-pencil-square"></i> Agregar Noticia
</h3>

<form>

<input type="text" class="form-control mb-2" placeholder="Título">
<input type="text" class="form-control mb-2" placeholder="Categoría">
<textarea class="form-control mb-2" placeholder="Descripción"></textarea>

<button class="btn btn-success">
<i class="bi bi-plus-circle"></i> Agregar
</button>

</form>

</section>

</main>

<!-- 🔊 AUDIO -->
<section class="container mt-5 text-center">

<h3 class="text-primary">
<i class="bi bi-volume-up-fill"></i> Audio ambiental
</h3>

<audio id="audioAmbiente" controls autoplay loop muted>
<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3">
</audio>

<br><br>

<button class="btn btn-warning"
onclick="document.getElementById('audioAmbiente').muted=false;">
Activar sonido
</button>

</section>

</main>

<!-- FOOTER -->
<footer class="bg-dark text-white py-5 mt-5">
<div class="container text-center">
<h4>EL FARO - DEPORTES</h4>
<p>© 2026 El Faro</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="JavaScrip.js"></script>

</body>
</html>