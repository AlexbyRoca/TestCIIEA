<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoce tu Cuerpo</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/first_grade/kinesthetic_activities.css">
    </head>
    <body>
    <div class="container">
        <h1>Conoce tu Cuerpo</h1>
        <p>Haz clic en las diferentes partes del cuerpo para conocer su nombre y más información.</p>
        <div class="body-image">
            <div class="body-part head" data-name="Cabeza" data-info="La cabeza contiene el cerebro, los ojos, los oídos, la nariz y la boca."></div>
            <div class="body-part torso" data-name="Torso" data-info="El torso alberga el corazón, los pulmones y otros órganos vitales."></div>
            <div class="body-part arm-left" data-name="Brazo Izquierdo" data-info="El brazo izquierdo ayuda a realizar movimientos y cargar objetos."></div>
            <div class="body-part arm-right" data-name="Brazo Derecho" data-info="El brazo derecho es fundamental para las actividades cotidianas."></div>
            <div class="body-part leg-left" data-name="Pierna Izquierda" data-info="La pierna izquierda permite caminar, correr y saltar."></div>
            <div class="body-part leg-right" data-name="Pierna Derecha" data-info="La pierna derecha es esencial para mantener el equilibrio."></div>
        </div>
        <div id="info" class="info">Haz clic en una parte del cuerpo.</div>
        <div class="download-container">
    <form action="/TestCIIEA/descargarEncuesta.php" method="POST" target="_blank" onsubmit="redirectAfterDownload()">
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


    <script src="/TestCIIEA/assets/js/first_grade/kinesthetic_activities.js"></script>
</body>
</html>
