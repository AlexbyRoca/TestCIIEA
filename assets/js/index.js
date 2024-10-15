function redirigir(event) {
    event.preventDefault(); // Evita que el formulario se envíe de manera tradicional

    const grado = document.getElementById('grado').value;
    
    if (grado) {
        // Redirigir a la página correspondiente según el grado seleccionado
        window.location.href = `test-grado${grado}.php`; // Ajusta el nombre de las páginas según tus necesidades
    }
}
function guardarDatos(event) {
    event.preventDefault(); // Prevenir el envío del formulario

    const nombre = document.getElementById('nombre').value;
    const escuela = document.getElementById('escuela').value;
    const grado = document.getElementById('grado').value;

    const datos = { nombre, escuela, grado };

    fetch('guardar_datos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Redirigir a la página del test correspondiente
            window.location.href = `test_grado${grado}.html`;
        } else {
            alert('Error al guardar los datos');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
$(document).ready(function () {
    // Aquí puedes agregar código JavaScript para manejar la interacción del formulario si es necesario
});