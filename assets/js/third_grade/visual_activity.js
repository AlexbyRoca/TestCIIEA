document.addEventListener("DOMContentLoaded", function() {
    const terminos = document.querySelectorAll(".termino");
    const definiciones = document.querySelectorAll(".definicion");
    const botonSiguiente = document.getElementById("siguiente");
    let terminoSeleccionado = null;

    // Asignación de eventos de arrastrar y soltar para escritorio
    terminos.forEach(termino => {
        // Eventos dragstart para arrastrar en escritorio
        termino.addEventListener("dragstart", function(e) {
            e.dataTransfer.setData("text", e.target.dataset.termino);
        });

        // Eventos touchstart y click para dispositivos móviles
        termino.addEventListener("click", seleccionarTermino);
        termino.addEventListener("touchstart", seleccionarTermino);
    });

    definiciones.forEach(definicion => {
        // Evento dragover para arrastrar en escritorio
        definicion.addEventListener("dragover", function(e) {
            e.preventDefault();
        });

        // Evento drop para soltar en escritorio
        definicion.addEventListener("drop", function(e) {
            e.preventDefault();
            const termino = e.dataTransfer.getData("text");
            comprobarRespuesta(termino, e.target);
        });

        // Eventos touchstart y click para dispositivos móviles
        definicion.addEventListener("click", verificarRespuesta);
        definicion.addEventListener("touchstart", verificarRespuesta);
    });

    // Función para seleccionar un término (dispositivos móviles y clic en escritorio)
    function seleccionarTermino(e) {
        e.preventDefault();
        terminoSeleccionado = e.target.dataset.termino;
        terminos.forEach(termino => termino.classList.remove("seleccionado"));
        e.target.classList.add("seleccionado");
    }

    // Función para verificar la respuesta cuando se utiliza arrastrar y soltar
    function comprobarRespuesta(termino, target) {
        if (termino === target.dataset.definicion) {
            target.classList.add("correcto");
            target.innerText += " ✓";
            verificarCompletado();
        } else {
            target.classList.add("incorrecto");
            setTimeout(() => target.classList.remove("incorrecto"), 1000);
        }
    }

    // Función para verificar la respuesta al tocar/clic en la definición (dispositivos móviles y clic en escritorio)
    function verificarRespuesta(e) {
        e.preventDefault();
        if (terminoSeleccionado) {
            const definicion = e.target;
            const definicionCorrecta = definicion.dataset.definicion;

            if (terminoSeleccionado === definicionCorrecta) {
                definicion.classList.add("correcto");
                definicion.innerText += " ✓";
                terminos.forEach(termino => {
                    if (termino.dataset.termino === terminoSeleccionado) {
                        termino.classList.add("asignado");
                    }
                });
                verificarCompletado();
            } else {
                definicion.classList.add("incorrecto");
                setTimeout(() => definicion.classList.remove("incorrecto"), 1000);
            }
            
            terminoSeleccionado = null;
            terminos.forEach(termino => termino.classList.remove("seleccionado"));
        }
    }

    // Verifica si todas las definiciones están completas
    function verificarCompletado() {
        const correctos = document.querySelectorAll(".definicion.correcto");
        if (correctos.length === definiciones.length) {
            botonSiguiente.disabled = false; // Habilita el botón para continuar
            botonSiguiente.addEventListener("click", irASiguienteActividad);
        }
    }

    // Función para redirigir a la siguiente actividad
    function irASiguienteActividad() {
        window.location.href = "/TestCIIEA/actividades/third_grade/audity_verbal_activity.php"; // Cambia esta ruta según corresponda
    }
});
