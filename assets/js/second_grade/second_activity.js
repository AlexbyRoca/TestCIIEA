document.addEventListener("DOMContentLoaded", function() {
    const wordsToFind = ['GATO', 'PERRO', 'CASA', 'ARBOL', 'FLOR', 'LIBRO', 'SOL', 'LUNA', 'MAR', ];
    let foundWords = [];
    let selectedCells = [];
    const tableCells = document.querySelectorAll("#wordsearch td");
    const wordListItems = document.querySelectorAll("#wordList li");

    // Función para marcar una palabra como encontrada
    function wordFound(word) {
        foundWords.push(word);

        // Marcar la palabra en la lista
        wordListItems.forEach(item => {
            if (item.textContent === word) {
                item.style.textDecoration = "line-through";
            }
        });

        // Marcar las celdas como encontradas y reiniciar la selección
        selectedCells.forEach(cell => {
            cell.classList.add("found");
            cell.classList.remove("selected");
        });

        selectedCells = []; // Reinicia la selección

        // Habilitar el botón "Continuar" si se encuentran todas las palabras
        if (foundWords.length === wordsToFind.length) {
            document.getElementById("continueBtn").disabled = false;
        }
    }

    // Verifica si las celdas seleccionadas forman una palabra válida
    function checkSelectedWord() {
        const selectedWord = selectedCells.map(cell => cell.textContent).join("").toUpperCase();

        // Verifica si es una palabra válida de 3 a 5 letras
        if (selectedWord.length >= 3 && selectedWord.length <= 5) {
            if (wordsToFind.includes(selectedWord) && !foundWords.includes(selectedWord)) {
                wordFound(selectedWord); // Marca la palabra como encontrada
            } else if (selectedCells.length >= 5) {
                // Si se alcanzan 5 letras sin coincidencia, reinicia
                selectedCells.forEach(cell => cell.classList.remove("selected"));
                selectedCells = [];
            }
        } else if (selectedCells.length > 5) {
            // Si seleccionas más de 5 letras, deselecciona todas
            selectedCells.forEach(cell => cell.classList.remove("selected"));
            selectedCells = [];
        }
    }

    // Maneja la selección de celdas
    tableCells.forEach(cell => {
        cell.addEventListener("click", function() {
            // Solo permite seleccionar celdas no encontradas previamente
            if (!cell.classList.contains("found")) {
                cell.classList.add("selected");
                selectedCells.push(cell);

                // Llama a la función de verificación si hay entre 3 y 5 celdas seleccionadas
                if (selectedCells.length >= 3) {
                    checkSelectedWord();
                }
            }
        });
    });
});


// Redirigir al hacer clic en el botón "Continuar"
continueBtn.addEventListener("click", () => {
    window.location.href = "/TestCIIEA/actividades/second_grade/verbal_audity_activities.php";
});
