<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Sonido y Rimas - Segundo Grado</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/second_grade/verbal_audity_activity.css">
</head>
<body>
    <div class="container">
        <h1>Adivina el Sonido</h1>
        <p>Escucha el sonido y elige la opción correcta:</p>
        
        <!-- Audio Element -->
        <audio id="sound" src="/TestCIIEA/assets/sounds/dog.mp3"></audio>
        <button id="playBtn">Escuchar Sonido</button>

        <ul class="options">
            <li><button onclick="checkAnswer('dog')">Perro</button></li>
            <li><button onclick="checkAnswer('cat')">Gato</button></li>
            <li><button onclick="checkAnswer('bell')">Campana</button></li>
        </ul>

        <p id="result" class="result"></p>
    </div>

    <div class="container">
        <h1>Actividad de Rimas</h1>
        <p>Encuentra las palabras que rimen con la palabra dada.</p>
        
        <div id="rhymeContainer">
            <h3 id="wordToRhyme">¿Con qué rima "Arcilla"?</h3>
            <ul id="rhymeOptions">
              <ul id="rhymeOptions">
    <li class="rhymeOption">Gato</li>
    <li class="rhymeOption">Plato</li>
    <li class="rhymeOption">Perro</li>
    <li class="rhymeOption">Silla</li>
</ul>

            </ul>
            <p id="rhymeResult" class="result"></p>
        </div>

        <button id="continueBtn" disabled>Continuar</button>
    </div>

    <script src="../../assets/js/second_grade/verbal_audity_activity.js"></script>
</body>
</html>
