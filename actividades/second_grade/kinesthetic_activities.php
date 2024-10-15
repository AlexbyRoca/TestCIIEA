<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigue el Ritmo - Segundo Grado</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/second_grade/kinesthetic_activity.css">
</head>
<body>
    <div class="container">
        <h1>Sigue el Ritmo</h1>
        <h1>Escucha y sigue la secuencia de sonidos, al finalizar podras descargar</h1>
        
        <!-- Botón de inicio -->
        <button id="startBtn">Iniciar</button>
        
        <!-- Botones de ritmo con data-sound -->
        <div class="buttons">
            <button class="rhythm-btn" data-sound="bell">Botón 1</button>
            <button class="rhythm-btn" data-sound="tambor">Botón 2</button>
            <button class="rhythm-btn" data-sound="xilofono">Botón 3</button>
            <button class="rhythm-btn" data-sound="aplauso">Botón 4</button>
        </div>

        <!-- Mostrar resultado -->
        <p id="result"></p>
    </div>


    <div class="download-container">
    <form action="/TestCIIEA/descargarEncuesta_Second_grade.php" method="POST" target="_blank" onsubmit="redirectAfterDownload()">
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

   
    <script src="../../assets/js/second_grade/kinesthetic_activity.js"></script>
</body>
</html>
