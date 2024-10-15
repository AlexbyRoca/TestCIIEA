<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Auditivo-Verbal</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/third_grade/audity_verbal_activity.css">
</head>
<body>
    <h1>Escucha y selecciona las palabras en el orden correcto ten en cuenta que si te equivocas tendras que empezar de nuevo, asi mismo una vez completado se activara el boton para ir la siguiente actividad.</h1>
    <div id="actividad">
        <button id="iniciarAudio">Iniciar</button>
        <div id="palabras">
            <!-- Las palabras se generarán dinámicamente aquí -->
        </div>
        <p id="feedback"></p>
        <!-- Botón de siguiente actividad -->
        <button id="siguienteActividad" disabled>Ir a la siguiente actividad</button>
    </div>
    <script src="/TestCIIEA/assets/js/third_grade/audity_verbal_activity.js"></script>
</body>
</html>
