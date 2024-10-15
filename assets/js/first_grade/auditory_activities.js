const btnNext = document.getElementById('btnNext');
const respuestas = document.querySelectorAll('.respuesta');

// Función para verificar si las respuestas tienen 2 o más letras
function checkResponses() {
    let allValid = true;

    respuestas.forEach(input => {
        // Verificar que la longitud del valor sea 2 o más
        if (input.value.trim().length < 2) {
            allValid = false;
        }
    });

    // Habilitar el botón solo si todas las respuestas son válidas
    btnNext.disabled = !allValid; 
}

// Agregar evento 'input' para verificar respuestas
respuestas.forEach(input => {
    input.addEventListener('input', checkResponses);
});

// Agregar evento de clic al botón para redirigir a la siguiente actividad
btnNext.addEventListener('click', function() {
    window.location.href = '/TestCIIEA/actividades/first_grade/kinesthetic_activities.php'; // Cambie la ruta según corresponda
});
