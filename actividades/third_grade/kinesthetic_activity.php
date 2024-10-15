<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simón Dice</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/third_grade/kinesthetic_activity.css">
</head>
<body>
    <h1>Simón Dice: ¡Sigue la Secuencia!, da clic en iniciar juego, una vez iniciado analiza el patron de colores conforme se activen para posteriormente dar clic en el orden correcto, una vez terminado podras consultar tus resultados.</h1>
    <div id="botones">
        <div class="boton" id="rojo" onclick="seleccionarColor('rojo')"></div>
        <div class="boton" id="azul" onclick="seleccionarColor('azul')"></div>
        <div class="boton" id="verde" onclick="seleccionarColor('verde')"></div>
        <div class="boton" id="amarillo" onclick="seleccionarColor('amarillo')"></div>
    </div>
    <button onclick="iniciarJuego()">Iniciar Juego</button>
    <div class="download-container">
    <form action="/TestCIIEA/descargarEncuesta_third_grade.php" method="POST" target="_blank" onsubmit="redirectAfterDownload()">
        <input type="hidden" name="format" value="pdf">
        <button type="submit" class="btn-download">Descargar Resultados en PDF</button>
    </form>
</div>

<script>
    function redirectAfterDownload() {
        setTimeout(() => {
            window.location.href = '/TestCIIEA/index.php';
        }, 2000); // Puedes ajustar el tiempo de espera
    }
</script>

    </div>
    <script src="/TestCIIEA/assets/js/third_grade/kinesthetic_activity.js"></script>
</body>
</html>
