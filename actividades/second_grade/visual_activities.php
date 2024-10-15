<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de Letras - Segundo Grado</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/second_grade/visual_activity.css">
</head>
<body>
    <div class="container">
        <h1>Sopa de Letras</h1>
        <p>Lee la lista de palabras que se encuentra debajo de la sopa de letras para comenzar. Una vez que encuentres una palabra, selecciónala letra por letra; de esta manera, podrás mejorar tu capacidad de observación y gramática. al finalizar, se habilitará el botón de continuar.</p>

        <div class="sopa">
            <table id="wordsearch">
                <tr>
                    <td>G</td><td>A</td><td>T</td><td>O</td><td>Q</td><td>P</td><td>K</td><td>U</td><td>V</td><td>J</td>
                </tr>
                <tr>
                    <td>X</td><td>P</td><td>E</td><td>R</td><td>R</td><td>O</td><td>L</td><td>F</td><td>G</td><td>C</td>
                </tr>
                <tr>
                    <td>C</td><td>A</td><td>S</td><td>A</td><td>W</td><td>R</td><td>E</td><td>T</td><td>B</td><td>H</td>
                </tr>
                <tr>
                    <td>D</td><td>M</td><td>Z</td><td>J</td><td>A</td><td>R</td><td>B</td><td>O</td><td>L</td><td>E</td>
                </tr>
                <tr>
                    <td>F</td><td>L</td><td>O</td><td>R</td><td>N</td><td>Y</td><td>V</td><td>Q</td><td>T</td><td>W</td>
                </tr>
                <tr>
                    <td>R</td><td>P</td><td>L</td><td>I</td><td>B</td><td>R</td><td>O</td><td>X</td><td>K</td><td>Y</td>
                </tr>
                <tr>
                    <td>Z</td><td>O</td><td>L</td><td>S</td><td>O</td><td>L</td><td>U</td><td>A</td><td>P</td><td>H</td>
                </tr>
                <tr>
                    <td>L</td><td>T</td><td>F</td><td>Q</td><td>L</td><td>U</td><td>N</td><td>A</td><td>N</td><td>S</td>
                </tr>
                <tr>
                    <td>N</td><td>A</td><td>U</td><td>W</td><td>O</td><td>P</td><td>V</td><td>F</td><td>R</td><td>A</td>
                </tr>
                <tr>
                    <td>Q</td><td>W</td><td>R</td><td>R</td><td>M</td><td>A</td><td>R</td><td>K</td><td>Z</td><td>N</td>
                </tr>
            </table>
        </div>
        <div class="palabras">
            <h3>Palabras a buscar:</h3>
            <ul id="wordList">
                <li>GATO</li>
                <li>PERRO</li>
                <li>CASA</li>
                <li>ARBOL</li>
                <li>FLOR</li>
                <li>LIBRO</li>
                <li>SOL</li>
                <li>LUNA</li>
                <li>MAR</li>
        
            </ul>
        </div>
       <!-- Añadir este botón en la sección correspondiente -->
<button id="continueBtn" disabled>Continuar</button>


    </div>
    <script src="../../assets/js/second_grade/second_activity.js"></script>
</body>
</html>
