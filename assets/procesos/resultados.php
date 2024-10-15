<?php
session_start();
if (!isset($_SESSION['resultados'])) {
    header("Location: test-grado$grado.php");
    exit();
}

$resultados = $_SESSION['resultados'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Estilo de Aprendizaje</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/TestCIIEA/assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Resultados de Estilos de Aprendizaje</h2>
        <p class="text-center">
        Felicidades, has completado el test correctamente y estos han sido tus resultados. Sin embargo, es ideal aprender a dominar un poco los demás estilos. Es por eso que te invito a realizar actividades personalizadas, las cuales te servirán para poder mejorar un poco los diversos tipos de aprendizajes que hay. Una vez finalizado, podrás descargar tus resultados y entregarlos a tus profesores:</p>
</p>

        <div class="my-4">
            <p>Visual: <?php echo $resultados['visual']; ?>%</p>
            <div class="progress">
                <div class="progress-bar progress-bar-visual" role="progressbar" style="width: <?php echo $resultados['visual']; ?>%" aria-valuenow="<?php echo $resultados['visual']; ?>" aria-valuemin="0" aria-valuemax="100">
                    <?php echo $resultados['visual']; ?>%
                </div>
            </div>
        </div>

        <div class="my-4">
            <p>Auditivo: <?php echo $resultados['auditivo']; ?>%</p>
            <div class="progress">
                <div class="progress-bar progress-bar-auditivo" role="progressbar" style="width: <?php echo $resultados['auditivo']; ?>%" aria-valuenow="<?php echo $resultados['auditivo']; ?>" aria-valuemin="0" aria-valuemax="100">
                    <?php echo $resultados['auditivo']; ?>%
                </div>
            </div>
        </div>

        <div class="my-4">
            <p>Kinestésico: <?php echo $resultados['kinestesico']; ?>%</p>
            <div class="progress">
                <div class="progress-bar progress-bar-kinestesico" role="progressbar" style="width: <?php echo $resultados['kinestesico']; ?>%" aria-valuenow="<?php echo $resultados['kinestesico']; ?>" aria-valuemin="0" aria-valuemax="100">
                    <?php echo $resultados['kinestesico']; ?>%
                </div>
            </div>
        </div>

        <?php if(isset($resultados['verbal'])): ?>
        <div class="my-4">
            <p>Verbal: <?php echo $resultados['verbal']; ?>%</p>
            <div class="progress">
                <div class="progress-bar progress-bar-verbal" role="progressbar" style="width: <?php echo $resultados['verbal']; ?>%" aria-valuenow="<?php echo $resultados['verbal']; ?>" aria-valuemin="0" aria-valuemax="100">
                    <?php echo $resultados['verbal']; ?>%
                </div>
            </div>
        </div>
        <?php endif; ?>

        <h3 class="text-center mt-4">Actividades para mejorar cada estilo:</h3>
        <ul>
           
            <li>Visual: Observa imágenes y gráficos relacionados con los temas de estudio.</li>
            <li>Auditivo: Escucha audiolibros o graba tus notas en audio.</li>
            <li>Kinestésico: Realiza actividades prácticas como maquetas o experimentos.</li>
            <li>Verbal: Practica leer en voz alta o explicar conceptos a otros.</li>
        </ul>

        <div class="text-center mt-4">
            <a href="/TestCIIEA/actividades/first_grade/visual_activities.php" class="btn btn-primary">HAGAMOS ACTIVIDADES</a>
        </div>
    </div>

    <script src="../js/resultados.js"></script>
</body>
</html>
