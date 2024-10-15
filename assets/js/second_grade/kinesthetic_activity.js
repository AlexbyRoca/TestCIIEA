const startBtn = document.getElementById("startBtn");
const buttons = document.querySelectorAll(".rhythm-btn");
const result = document.getElementById("result");

let sequence = [];
let playerSequence = [];
let level = 0;
const maxLevels = 5; // Número máximo de niveles para completar la actividad

// Función para iniciar el juego
startBtn.addEventListener("click", startGame);

function startGame() {
    result.textContent = "";
    sequence = [];
    playerSequence = [];
    level = 0;
    nextLevel();
}

function nextLevel() {
    level++;
    playerSequence = [];
    const nextBtn = buttons[Math.floor(Math.random() * buttons.length)];
    sequence.push(nextBtn);
    playSequence();

    // Verificar si se ha alcanzado el número máximo de niveles
    if (level === maxLevels) {
        result.textContent = "¡Felicidades! Has completado la actividad.";
        startBtn.disabled = true; // Desactiva el botón de inicio
        return; // Sale de la función
    }
}

function playSequence() {
    sequence.forEach((btn, index) => {
        setTimeout(() => {
            btn.classList.add("active");
            playSound(btn.dataset.sound);
            setTimeout(() => {
                btn.classList.remove("active");
            }, 600);
        }, (index + 1) * 1000);
    });
}

buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
        playerSequence.push(btn);
        playSound(btn.dataset.sound);
        checkSequence();
    });
});

function checkSequence() {
    for (let i = 0; i < playerSequence.length; i++) {
        if (playerSequence[i] !== sequence[i]) {
            result.textContent = "¡Incorrecto! Inténtalo de nuevo.";
            return;
        }
    }
    if (playerSequence.length === sequence.length) {
        result.textContent = "¡Correcto! Sigue el siguiente ritmo.";
        setTimeout(nextLevel, 1000);
    }
}

function playSound(soundId) {
    const audio = new Audio(`/TestCIIEA/assets/sounds/${soundId}.mp3`);
    audio.play();
}

// Función para descargar el PDF y redirigir
function downloadAndRedirect() {
    // Un breve retraso para permitir que se complete la descarga
    setTimeout(() => {
        window.location.href = '/TestCIIEA/index.php'; // Cambia la ruta si es necesario
    }, 1000); // 1 segundo de retraso
    return true; // Permitir que el formulario se envíe
}
