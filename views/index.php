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
    <section class="row mb-5">
        <div class="col-12">
            <div class="p-5 rounded shadow-lg text-white" style="background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <span class="badge bg-light text-dark mb-3">Noticia destacada</span>
                        <h1 class="display-5 fw-bold">Impacto global: nuevas regulaciones digitales ponen a prueba a las grandes tecnológicas</h1>
                        <p class="lead">Gobiernos de Europa y América Latina avanzan con marcos regulatorios que buscan equilibrar la competencia y la protección del consumidor frente al poder de los gigantes digitales.</p>
                        <a href="#noticias-secundarias" class="btn btn-light btn-lg">Ver noticias secundarias</a>
                    </div>
                    <div class="col-lg-5 mt-4 mt-lg-0">
                        <div class="ratio ratio-16x9 rounded shadow">
                            <iframe src="https://www.youtube.com/embed/k2-LUK_vmOA" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias-secundarias">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0 text-primary"><i class="bi bi-grid-1x2-fill"></i> Noticias secundarias</h3>
            <small class="text-muted">Actualizado hoy</small>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🌌 Arqueología espacial desde Atacama</h5>
                        <p class="text-muted small">Categoría: Ciencia <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Un equipo internacional logró reconstruir la historia de la galaxia NGC 1365 utilizando arqueología química desde el Observatorio Las Campanas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>💉 Espuma inteligente que salva vidas</h5>
                        <p class="text-muted small">Categoría: Salud <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La innovadora tecnología ResQFoam permite detener hemorragias internas en segundos, representando un cambio en la medicina de emergencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🎤 Nuevo soundtrack de Michael Jackson</h5>
                        <p class="text-muted small">Categoría: Espectáculos <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Se lanzará el álbum "Michael: Songs from the Motion Picture", con 13 canciones que recorren la carrera del artista, disponible desde el 24 de abril.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🏔️ Nevadas intensas en la cordillera</h5>
                        <p class="text-muted small">Categoría: Clima <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Fuertes nevadas afectan la zona cordillerana del país, generando cortes de rutas y aumento en el nivel de los ríos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>⚽ Final del campeonato nacional</h5>
                        <p class="text-muted small">Categoría: Deportes <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>Un emocionante cierre de temporada definirá al nuevo campeón del fútbol nacional, con estadios llenos para la última fecha.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm noticia">
                    <div class="card-body">
                        <h5>🎭 Festival cultural en Santiago</h5>
                        <p class="text-muted small">Categoría: Cultura <span class="float-end"><i class="bi bi-clock"></i> 1 min</span></p>
                        <p>La capital se llena de actividades culturales con música, teatro y danza en espacios públicos, promoviendo el arte local.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 p-4 rounded" style="background-color: #f5f5f5;">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h4 class="fw-bold mb-4"><i class="bi bi-chat-dots"></i> Comentarios</h4>
                <div id="comments-list-home">
                    <div class="card mb-3 border-0" style="background-color: #ffffff;">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Ana Torres</h6>
                            <p class="text-muted small mb-2">14 de mayo de 2026</p>
                            <p class="card-text">Muy buena selección de noticias destacadas. El hero queda excelente.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-3 shadow-sm border-0">
                    <h5 class="fw-bold mb-3">Deja tu comentario</h5>
                    <form id="commentFormHome">
                        <div class="mb-3">
                            <input type="text" id="commentNameHome" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <textarea id="commentTextHome" class="form-control" rows="4" placeholder="Escribe tu comentario" required></textarea>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Enviar comentario</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
    const formCon = document.getElementById('formContacto');
    if(formCon) {
        formCon.addEventListener('submit', function() {
            setTimeout(() => {
                formCon.reset();
            }, 100);
        });
    }

    const commentFormHome = document.getElementById('commentFormHome');
    if(commentFormHome) {
        commentFormHome.addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('commentNameHome').value.trim();
            const text = document.getElementById('commentTextHome').value.trim();
            if (!name || !text) return;
            const list = document.getElementById('comments-list-home');
            const commentCard = document.createElement('div');
            commentCard.className = 'card mb-3 border-0';
            commentCard.style.backgroundColor = '#ffffff';
            commentCard.innerHTML = `
                <div class="card-body">
                    <h6 class="card-title fw-bold">${name}</h6>
                    <p class="text-muted small mb-2">${new Date().toLocaleDateString('es-CL')}</p>
                    <p class="card-text">${text}</p>
                </div>
            `;
            list.prepend(commentCard);
            commentFormHome.reset();
        });
    }
</script>
</body>
</html>