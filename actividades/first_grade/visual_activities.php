<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades para Mejorar el Estilo Visual</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/TestCIIEA/assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/first_grade/visual_activities.css">
</head>
<body>
    <div class="container">
        <h1>Actividad para Mejorar tu Estilo Visual</h1>
        <p class="intro">Aquí encontrarás una actividad para fortalecer tu aprendizaje visual al poner a prueba tu capacidad de observación y memorización.</p>


        <!-- Actividad 1: Juego de Memoria -->
        <section class="activity">
            <h2>Actividad 1: Juego de Memoria con Imágenes</h2>
            <p>Encuentra las imágenes iguales lo más rápido posible.</p>
            <div class="memory-game" id="memory-game">
                <div class="memory-card" data-image="1"><img src="/TestCIIEA/assets/imgs/activities/visual/pato.png" alt="Imagen 1"></div>
                <div class="memory-card" data-image="5"><img src="/TestCIIEA/assets/imgs/activities/visual/frutas.jpeg" alt="Imagen 5"></div>
                <div class="memory-card" data-image="2"><img src="/TestCIIEA/assets/imgs/activities/visual/pinguino.jpeg" alt="Imagen 2"></div>
                <div class="memory-card" data-image="1"><img src="/TestCIIEA/assets/imgs/activities/visual/pato.png" alt="Imagen 1"></div>
                <div class="memory-card" data-image="3"><img src="/TestCIIEA/assets/imgs/activities/visual/gatito.jpeg" alt="Imagen 3"></div>
            </div>
            <br>
            <div class="memory-game" id="memory-game">
                <div class="memory-card" data-image="4"><img src="/TestCIIEA/assets/imgs/activities/visual/sandia.jpeg" alt="Imagen 4"></div>
                <div class="memory-card" data-image="2"><img src="/TestCIIEA/assets/imgs/activities/visual/pinguino.jpeg" alt="Imagen 2"></div>
                <div class="memory-card" data-image="5"><img src="/TestCIIEA/assets/imgs/activities/visual/frutas.jpeg" alt="Imagen 5"></div>
                <div class="memory-card" data-image="4"><img src="/TestCIIEA/assets/imgs/activities/visual/sandia.jpeg" alt="Imagen 4"></div>
                <div class="memory-card" data-image="3"><img src="/TestCIIEA/assets/imgs/activities/visual/gatito.jpeg" alt="Imagen 3"></div>
            </div>
        </section>

    

      <!-- Botón para avanzar, inicialmente oculto -->
<button id="nextButton" class="btn btn-primary hidden" onclick="goToNextActivity()">Continuar a la siguiente actividad</button>


    <script src="/TestCIIEA/assets/js/first_grade/visual_activities.js"></script>
</body>
</html>
