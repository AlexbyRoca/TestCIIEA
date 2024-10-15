const cards = document.querySelectorAll('.memory-card');
let hasFlippedCard = false;
let firstCard, secondCard;
let lockBoard = false;
let matchedPairs = 0; // Contador de parejas encontradas
const totalPairs = cards.length / 2; // Total de parejas
const nextButton = document.getElementById('nextButton'); // Referencia al botón

function flipCard() {
    if (lockBoard) return;
    if (this === firstCard) return;

    this.classList.add('flipped');

    if (!hasFlippedCard) {
        // Primera carta seleccionada
        hasFlippedCard = true;
        firstCard = this;
        return;
    }

    // Segunda carta seleccionada
    secondCard = this;
    checkForMatch();
}

function checkForMatch() {
    let isMatch = firstCard.dataset.image === secondCard.dataset.image;

    if (isMatch) {
        disableCards();
        matchedPairs++; // Incrementa el contador de parejas encontradas
        console.log(`Parejas encontradas: ${matchedPairs}`);
        if (matchedPairs === totalPairs) {
            showNextButton(); // Mostrar el botón si se completan todos los pares
        }
    } else {
        unflipCards();
    }
}

function disableCards() {
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    resetBoard();
}

function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flipped');
        secondCard.classList.remove('flipped');
        resetBoard();
    }, 1500);
}

function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

function showNextButton() {
    console.log("Mostrando el botón de siguiente actividad");
    nextButton.classList.remove('hidden'); // Mostrar el botón
}

function goToNextActivity() {
    window.location.href = "/TestCIIEA/actividades/first_grade/auditory_activities.php"; // Redirigir a la siguiente actividad
}

cards.forEach(card => card.addEventListener('click', flipCard));
