// Lista de palabras en el orden que se escuchan en el audio
const palabrasCorrectas = [
    "lapiz", "leche", "limon", "lana", "luz", "lazo", "luna", "lupa",
    "libro", "lata", "lampara", "lagrima", "lobo", "lemur", "loro",
    "libelula", "lagartija", "liebre"
];

// Desordenamos las palabras para los botones
let palabrasDesordenadas = [...palabrasCorrectas].sort(() => Math.random() - 0.5);

// Elemento de audio
const audioElement = new Audio('/TestCIIEA/assets/sounds/palabras.mp3');

// Estado de la selección del estudiante
let seleccionActual = 0;

// Iniciar el audio
document.getElementById('iniciarAudio').addEventListener('click', () => {
    audioElement.play();
    document.getElementById('feedback').innerText = "Escucha atentamente el audio.";
});

// Generar los botones de palabras
const palabrasContainer = document.getElementById('palabras');
palabrasDesordenadas.forEach((palabra) => {
    const boton = document.createElement('button');
    boton.innerText = palabra;
    boton.className = 'palabra';
    boton.addEventListener('click', () => seleccionarPalabra(palabra, boton));
    palabrasContainer.appendChild(boton);
});

const botonSiguiente = document.getElementById('siguienteActividad');

function seleccionarPalabra(palabra, boton) {
    const feedback = document.getElementById('feedback');

    if (palabra === palabrasCorrectas[seleccionActual]) {
        boton.style.backgroundColor = 'lightgreen';
        seleccionActual++;

        if (seleccionActual === palabrasCorrectas.length) {
            feedback.innerText = "¡Actividad completada exitosamente! Todas las palabras empiezan con la letra 'L', lo que muestra la importancia de la atención auditiva.";
            botonSiguiente.disabled = false;  // Habilita el botón de siguiente actividad
            botonSiguiente.addEventListener('click', () => {
                window.location.href = '/TestCIIEA/actividades/third_grade/kinesthetic_activity.php';  // Cambia esta ruta según corresponda
            });
        } else {
            feedback.innerText = "¡Correcto! Continúa con la siguiente palabra.";
        }
    } else {
        boton.style.backgroundColor = 'lightcoral';
        feedback.innerText = "Respuesta incorrecta. Intenta nuevamente en el orden correcto.";
        seleccionActual = 0; 
        document.querySelectorAll('.palabra').forEach(btn => btn.style.backgroundColor = '');
    }
}
