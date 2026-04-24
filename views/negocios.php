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
body{
    font-family: 'Montserrat', sans-serif;
    background-color: #f4f7f6;
}

/* HOVER */
.noticia{
    transition: 0.3s;
}

.noticia:hover{
    background-color: #000;
    color: #fff;
}

.noticia:hover p,
.noticia:hover h5,
.noticia:hover span{
    color: #fff !important;
}

/* VIDEO */
.video-container{
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    border-radius: 10px;
}

.video-container iframe{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
}
</style>
</head>

<body>

<!-- 🔔 AVISO -->
<div class="alert alert-success text-center mb-0 p-2 rounded-0">
📈 <strong>MERCADOS:</strong> El cobre y exportaciones chilenas muestran crecimiento.
</div>

<!-- 🔹 NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand fw-bold" href="index.html">EL FARO</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-center" id="menu">
<ul class="navbar-nav text-center">
<li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="deportes.html">Deportes</a></li>
<li class="nav-item"><a class="nav-link active" href="negocios.html">Negocios</a></li>
</ul>
</div>

<!-- HEADER -->
<div class="d-flex align-items-center">

<small id="reloj-digital" class="text-white me-3"></small>

<small class="text-white me-3">
<i class="bi bi-newspaper"></i>
Artículos: <span id="contador-articulos">6</span>
</small>

</div>

</div>
</nav>

<!-- 🔹 CONTENIDO -->
<main class="container my-5">


<section class="row mb-5 justify-content-center">
<div class="col-lg-10">
<div class="video-container shadow">
<iframe src="https://www.youtube.com/embed/XHS84m0qaL0" allowfullscreen></iframe>
</div>
</div>
</section>

<!-- 📰 NOTICIAS -->
<h3 class="mb-4 text-primary">
<i class="bi bi-newspaper"></i> Actualidad Económica
</h3>

<section class="row">


<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🌴 Nuevas Inversiones Turísticas</h5>
<p><strong>Categoría:</strong> Turismo</p>
<p>El sur de Chile recibe inversiones en hoteles y transporte.</p>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>⛏️ Producción de Cobre</h5>
<p><strong>Categoría:</strong> Minería</p>
<p>Las exportaciones de cobre aumentan este semestre.</p>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>⚡ Energías Renovables</h5>
<p><strong>Categoría:</strong> Energía</p>
<p>Proyectos solares y eólicos en el norte del país.</p>
</div>
</div>
</div>


<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🏦 Crecimiento del sistema bancario</h5>
<p><strong>Categoría:</strong> Finanzas</p>
<p>Los bancos digitales aumentan su presencia en Chile.</p>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>📦 Auge del e-commerce</h5>
<p><strong>Categoría:</strong> Comercio</p>
<p>Las ventas online crecen un 35% en el último año.</p>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card h-100 shadow-sm noticia">
<div class="card-body">
<h5>🚚 Logística en expansión</h5>
<p><strong>Categoría:</strong> Transporte</p>
<p>Nuevas rutas mejoran la distribución nacional.</p>
</div>
</div>
</div>

</section>
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
<section class="container mt-4 text-center">

<h3 class="text-primary">
<i class="bi bi-volume-up-fill"></i> Audio ambiental
</h3>

<audio id="audioAmbiente" controls autoplay loop muted>
<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3">
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
<h4>EL FARO - NEGOCIOS</h4>
<p>© 2026 El Faro</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="JavaScrip.js"></script>

</body>
</html>