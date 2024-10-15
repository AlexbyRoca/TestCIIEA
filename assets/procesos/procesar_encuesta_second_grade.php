<?php
session_start();
include('config.php');  // Incluye la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Inicializa contadores para los estilos de aprendizaje
    $visual = 0;
    $auditivo = 0;
    $kinestesico = 0;
    
    // Asigna las preguntas a sus categorías
    $categorias = [
        1 => 'visual', 2 => 'auditivo', 3 => 'kinestesico',
        4 => 'visual', 5 => 'auditivo', 6 => 'kinestesico',
        7 => 'visual', 8 => 'auditivo', 9 => 'kinestesico',
        10 => 'visual', 11 => 'auditivo', 12 => 'kinestesico'
    ];

    // Recorre las respuestas del formulario
    foreach ($_POST['respuesta'] as $preguntaId => $respuesta) {
        // Según la pregunta, incrementa el estilo de aprendizaje correspondiente
        $estilo = $categorias[$preguntaId];
        if ($respuesta == 'SI') {
            $$estilo++;  // Incrementa la variable de ese estilo
        }
    }

    // Calcula el porcentaje por cada estilo (dividido entre 4 preguntas por estilo)
    $visualPorcentaje = ($visual / 4) * 100;
    $auditivoPorcentaje = ($auditivo / 4) * 100;
    $kinestesicoPorcentaje = ($kinestesico / 4) * 100;

    // Asigna el porcentaje de auditivo al estilo verbal
    $verbalPorcentaje = $auditivoPorcentaje;

    // Guarda los resultados en la sesión
    $_SESSION['resultados'] = [
        'visual' => $visualPorcentaje,
        'auditivo' => $auditivoPorcentaje,
        'kinestesico' => $kinestesicoPorcentaje,
        'verbal' => $verbalPorcentaje
    ];

    // Redirige a la página de resultados
    header('Location: ../procesos/resultados_second_grade.php');
    exit();
}
?>
