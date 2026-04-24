document.addEventListener("DOMContentLoaded", function () {

    /* =========================
        HEADER - FECHA Y HORA
    ========================= */
    const relojContenedor = document.getElementById('reloj-digital');

    function actualizarReloj() {
        if (!relojContenedor) return;

        const ahora = new Date();

        const opcionesFecha = { weekday: 'long', day: 'numeric', month: 'long' };
        const fechaTexto = ahora.toLocaleDateString('es-ES', opcionesFecha);

        const tiempoTexto = ahora.toLocaleTimeString('es-ES', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });

        relojContenedor.innerHTML = `${fechaTexto} | ${tiempoTexto}`;
    }

    setInterval(actualizarReloj, 1000);
    actualizarReloj();


    /* =========================
        CONTADOR DE NOTICIAS
    ========================= */
    const contador = document.getElementById('contador-articulos');

    function actualizarContador() {
        if (!contador) return;
        const total = document.querySelectorAll('.card.noticia').length;
        contador.innerText = total;
    }

    actualizarContador();


    /* =========================
        SONIDO CLICK GENERAL
    ========================= */
    const sonido = document.getElementById("sonidoClick");

    function reproducirSonido() {
        if (sonido) {
            sonido.currentTime = 0;
            sonido.play();
        }
    }

    /* =========================
        FORMULARIO - AGREGAR NOTICIAS
    ========================= */
    const formNoticia = document.getElementById("form-noticia");
    const contenedorNoticias = document.getElementById("contenedor-noticias");

    if (formNoticia && contenedorNoticias) {

        formNoticia.addEventListener("submit", function (e) {
            e.preventDefault();

            const titulo = document.getElementById("titulo").value;
            const categoria = document.getElementById("categoria").value;
            const descripcion = document.getElementById("descripcion").value;

            const nuevaNoticia = document.createElement("div");
            nuevaNoticia.className = "col-md-4 mb-4";

            nuevaNoticia.innerHTML = `
                <div class="card noticia h-100">
                    <div class="card-body">
                        <h5>${titulo}</h5>
                        <p class="text-muted"><small>${categoria}</small></p>
                        <p>${descripcion}</p>
                    </div>
                </div>
            `;

            contenedorNoticias.prepend(nuevaNoticia);

            // 🔊 SONIDO AL AGREGAR NOTICIA
            reproducirSonido();

            // actualizar contador
            actualizarContador();

            // limpiar formulario
            this.reset();
        });
    }

});