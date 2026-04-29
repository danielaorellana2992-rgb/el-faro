<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro - Modernizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .noticia { transition: 0.3s; }
        .noticia:hover { background-color: #000 !important; color: #fff !important; }
        .noticia:hover p, .noticia:hover h5 { color: #fff !important; }
    </style>
</head>
<body>

<div class="alert alert-warning text-center mb-0 p-2 rounded-0">
    <strong>AVISO:</strong> Suscríbete para recibir las últimas noticias de "El Faro".
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">EL FARO</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="deportes.php">Deportes</a></li>
                <li class="nav-item"><a class="nav-link" href="negocios.php">Negocios</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <small id="reloj-digital" class="text-white me-3"></small>
            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">Iniciar Sesión</a>
        </div>
    </div>
</nav>

<main class="container my-5">
    <section class="row mb-5 justify-content-center">
        <div class="col-lg-10">
            <div class="ratio ratio-16x9 shadow rounded">
                <iframe src="https://www.youtube.com/embed/k2-LUK_vmOA" allowfullscreen></iframe>
            </div>
        </div>
    </section>

   <h3 class="mb-4 text-primary"><i class="bi bi-newspaper"></i> Noticias Destacadas</h3>
    <div class="row">
        <!-- 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>🌌 Arqueología espacial desde Atacama</h5>
                    <p class="text-muted small">Categoría: Ciencia</p>
                    <p>Un equipo internacional logró reconstruir la historia de la galaxia NGC 1365 utilizando arqueología química desde el Observatorio Las Campanas.</p>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>💉 Espuma inteligente que salva vidas</h5>
                    <p class="text-muted small">Categoría: Salud</p>
                    <p>La innovadora tecnología ResQFoam permite detener hemorragias internas en segundos, representando un cambio en la medicina de emergencia.</p>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>🎤 Nuevo soundtrack de Michael Jackson</h5>
                    <p class="text-muted small">Categoría: Espectáculos</p>
                    <p>Se lanzará el álbum "Michael: Songs from the Motion Picture", con 13 canciones que recorren la carrera del artista, disponible desde el 24 de abril.</p>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>🏔️ Nevadas intensas en la cordillera</h5>
                    <p class="text-muted small">Categoría: Clima</p>
                    <p>Fuertes nevadas afectan la zona cordillerana del país, generando cortes de rutas y aumento en el nivel de los ríos.</p>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>⚽ Final del campeonato nacional</h5>
                    <p class="text-muted small">Categoría: Deportes</p>
                    <p>Un emocionante cierre de temporada definirá al nuevo campeón del fútbol nacional, con estadios llenos para la última fecha.</p>
                </div>
            </div>
        </div>
        <!-- 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm noticia">
                <div class="card-body">
                    <h5>🎭 Festival cultural en Santiago</h5>
                    <p class="text-muted small">Categoría: Cultura</p>
                    <p>La capital se llena de actividades culturales con música, teatro y danza en espacios públicos, promoviendo el arte local.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5" id="contacto">
        <h3 class="text-primary mb-3"><i class="bi bi-envelope-fill"></i> Contáctanos</h3>
        <form id="formContacto" action="../controllers/ContactoController.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                </div>
            </div>
            <textarea name="mensaje" class="form-control mb-3" rows="4" placeholder="Mensaje" required></textarea>
            <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i> Enviar</button>
        </form>
    </section>
</main>

<section class="container mt-4 text-center">
    <audio id="audioAmbiente" controls loop muted>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3">
    </audio>
</section>

<div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-dark">
      <div class="modal-header">
        <h5 class="modal-title">Hazte socio de El Faro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="../controllers/UsuarioController.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-light py-5 mt-5 text-center">
    <h4>EL FARO</h4>
    <p>© 2026 El Faro - Tu diario digital</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="JavaScrip.js"></script>
<script>
    const formCon = document.getElementById('formContacto');
    if(formCon) {
        formCon.addEventListener('submit', function() {
            setTimeout(() => {
                formCon.reset();
            }, 100);
        });
    }
</script>
</body>
</html>