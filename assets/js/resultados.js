// resultados.js
document.addEventListener("DOMContentLoaded", function() {
    let progressBars = document.querySelectorAll(".progress-bar");

    // Reinicia todas las barras de progreso a 0%
    progressBars.forEach(function(bar) {
        bar.style.width = "0%";
    });

    // Después de un pequeño retraso, aplica la animación de llenado
    setTimeout(function() {
        progressBars.forEach(function(bar) {
            let width = bar.getAttribute("aria-valuenow");
            bar.style.width = width + "%";  // Cambiamos el ancho al porcentaje almacenado en "aria-valuenow"
        });
    }, 300);  // Espera 300ms para hacer que la animación comience después de vaciar
});
