<?php
session_start();
header('Content-Type: application/json');

// Verifica si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si todos los datos requeridos están presentes
    if (isset($_POST['nombres']) && isset($_POST['escuela']) && isset($_POST['grado']) && isset($_POST['respuesta'])) {
        
        // Conectar con la base de datos
        include('config.php'); // Asegúrate de tener la configuración correcta de la base de datos
        
        // Recibir los datos
        $nombres = $_POST['nombres'];
        $escuela = $_POST['escuela'];
        $grado = $_POST['grado'];
        $respuestas = $_POST['respuesta']; // Array de respuestas
        $observacion = isset($_POST['observacion']) ? $_POST['observacion'] : 'No hay observación';

        // Guardar cada respuesta en la base de datos
        foreach ($respuestas as $id_pregunta => $respuesta) {
            $sql = "INSERT INTO respuestas_encuesta (id_pregunta, respuesta, nombres, escuela, grado, observacion, created) 
                    VALUES ('$id_pregunta', '$respuesta', '$nombres', '$escuela', '$grado', '$observacion', NOW())";
            $query = mysqli_query($con, $sql);

            if (!$query) {
                echo json_encode(['respuesta' => false, 'error' => 'Error al insertar respuesta en la base de datos']);
                exit();
            }
        }

        // Si todas las respuestas se guardaron correctamente
        echo json_encode(['respuesta' => true]);
        exit();
    } else {
        echo json_encode(['respuesta' => false, 'error' => 'Faltan datos']);
        exit();
    }
} else {
    echo json_encode(['respuesta' => false, 'error' => 'Método no permitido']);
    exit();
}
?>
