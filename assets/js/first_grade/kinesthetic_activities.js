const bodyParts = document.querySelectorAll('.body-part');
const info = document.getElementById('info');
const nextActivityButton = document.getElementById('nextActivity');

let completedParts = 0;

bodyParts.forEach(part => {
    part.addEventListener('click', function() {
        const name = this.getAttribute('data-name');
        const additionalInfo = this.getAttribute('data-info');
        info.textContent = `¡Has clicado en: ${name}! ${additionalInfo}`;
        completedParts++;
        this.style.opacity = 0.5; // Marcar parte como completada
        checkCompletion();
    });
});

function checkCompletion() {
    if (completedParts === bodyParts.length) {
        nextActivityButton.disabled = false; // Habilitar botón si todas las partes han sido clicadas
    }
}
