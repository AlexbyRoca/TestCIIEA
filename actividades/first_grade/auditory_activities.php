<?php
session_start(); // Iniciar la sesión

// Verificar si las variables de sesión están definidas
if (isset($_SESSION['nombres'])) {
    $nombres = $_SESSION['nombres'];
} else {
    $nombres = "Usuario";
}

if (isset($_SESSION['escuela'])) {
    $escuela = $_SESSION['escuela'];
} else {
    $escuela = "No especificada";
}

if (isset($_SESSION['grado'])) {
    $grado = $_SESSION['grado'];
} else {
    $grado = "No especificado";
}

if (isset($_SESSION['turno'])) {
    $turno = $_SESSION['turno'];
} else {
    $turno = "No especificado";
}

if (isset($_SESSION['grupo'])) {
    $grupo = $_SESSION['grupo'];
} else {
    $grupo = "No especificado";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="/TestCIIEA/assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/first_grade/auditory_activities.css">
    <title>Actividad Verbal</title>
</head>
<body>
    <div class="container">
        <h1>Actividad Verbal</h1>
        <p class="intro">Completa las siguientes frases:</p>
        <form id="verbalActivityForm">
            <div class="question">
                <label for="frase1">1. El sol brilla durante el ____.</label>
                <input type="text" id="frase1" class="respuesta" required>
            </div>
            <div class="question">
                <label for="frase2">2. La luna aparece en la ____.</label>
                <input type="text" id="frase2" class="respuesta" required>
            </div>
            <div class="question">
                <label for="frase3">3. Los pájaros vuelan en el ____.</label>
                <input type="text" id="frase3" class="respuesta" required>
            </div>
            <button type="button" id="btnNext" disabled>Ir a la siguiente actividad</button>
        </form>
    </div>
 
    <script src="/TestCIIEA/assets/js/first_grade/auditory_activities.js"></script>
</body>
</html>
