// script.js

let secuencia = [];
let secuenciaUsuario = [];
let colores = ["rojo", "azul", "verde", "amarillo"];
let nivel = 0;

// Función para iniciar el juego
function iniciarJuego() {
    secuencia = [];
    secuenciaUsuario = [];
    nivel = 0;
    siguienteNivel(); // Inicia el primer nivel
}

// Función para avanzar al siguiente nivel
function siguienteNivel() {
    nivel++;
    secuenciaUsuario = [];
    secuencia.push(colores[Math.floor(Math.random() * colores.length)]); // Agrega un color aleatorio a la secuencia
    mostrarSecuencia(); // Muestra la secuencia
}

// Función para mostrar la secuencia
function mostrarSecuencia() {
    let i = 0;
    const intervalo = setInterval(() => {
        resaltarColor(secuencia[i]); // Resalta el color
        i++;
        if (i >= secuencia.length) {
            clearInterval(intervalo); // Detiene el intervalo
        }
    }, 1000);
}

// Función para resaltar el color
function resaltarColor(color) {
    const boton = document.getElementById(color);
    boton.classList.add('resaltar'); // Agrega clase para resaltar
    setTimeout(() => boton.classList.remove('resaltar'), 500); // Quita el resalte después de medio segundo
}

// Función para seleccionar un color
function seleccionarColor(color) {
    secuenciaUsuario.push(color); // Agrega el color a la secuencia del usuario
    resaltarColor(color); // Resalta el color seleccionado

    if (!verificarSecuencia()) {
        document.getElementById('mensaje').innerText = "¡Incorrecto! Inténtalo de nuevo."; // Mensaje de error
        return;
    }

    if (secuenciaUsuario.length === secuencia.length) {
        document.getElementById('mensaje').innerText = `¡Bien hecho! Pasaste al nivel ${nivel}.`; // Mensaje de éxito
        setTimeout(siguienteNivel, 1000); // Avanza al siguiente nivel después de un segundo
    }
}

// Función para verificar si la secuencia es correcta
function verificarSecuencia() {
    for (let i = 0; i < secuenciaUsuario.length; i++) {
        if (secuenciaUsuario[i] !== secuencia[i]) {
            return false; // Si hay un error, retorna falso
        }
    }
    return true; // Si todo es correcto, retorna verdadero
}
