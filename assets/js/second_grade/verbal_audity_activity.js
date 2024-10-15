const playBtn = document.getElementById("playBtn");
const sound = document.getElementById("sound");
const result = document.getElementById("result");
const rhymeOptions = document.querySelectorAll(".rhymeOption");
const rhymeResult = document.getElementById("rhymeResult");
const continueBtn = document.getElementById("continueBtn");

// Reproduce el sonido
playBtn.addEventListener("click", () => {
    sound.play();
});

// Verifica la respuesta del sonido
function checkAnswer(answer) {
    if (answer === "dog") {
        result.textContent = "¡Correcto! El sonido es un perro.";
        result.style.color = "green";
    } else {
        result.textContent = "¡Incorrecto! Intenta de nuevo.";
        result.style.color = "red";
    }
}

// Lógica para la actividad de rimas
rhymeOptions.forEach(option => {
    option.addEventListener("click", function() {
        if (this.textContent === "Silla") { // La palabra que rima
            rhymeResult.textContent = "¡Correcto! 'Arcilla' rima con 'Silla'.";
            rhymeResult.style.color = "green";
            this.classList.add("found"); // Marcar opción correcta
            continueBtn.disabled = false; // Habilitar el botón "Continuar"
        } else {
            rhymeResult.textContent = "¡Incorrecto! Intenta de nuevo.";
            rhymeResult.style.color = "red";
            continueBtn.disabled = true; // Deshabilitar el botón si es incorrecto
        }
    });
});

// Redirigir al siguiente paso
continueBtn.addEventListener("click", () => {
    window.location.href = "/TestCIIEA/actividades/second_grade/kinesthetic_activities.php"; // Redirigir a la siguiente actividad
});
