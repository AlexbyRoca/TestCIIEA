$(document).ready(function () {
    $('#formFormatoGS').on('submit', function () {
        // Aquí puedes agregar lógica para manejar la barra de progreso, validaciones, etc.
        $('.progress-bar').css('width', '100%').text('100%');
    });

    // Actualizar el año en el footer
    $('#currentYear').text(new Date().getFullYear());
});
