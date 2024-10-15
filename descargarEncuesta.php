<?php
include('config.php');
require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set("America/Mexico_City");
$fecha = date("d/m/Y");

session_start();

// Obtener resultados de la sesión
$resultados = $_SESSION['resultados'];

// Verificar si las variables de sesión están definidas
$nombres = isset($_SESSION['nombres']) ? $_SESSION['nombres'] : "Usuario";
$escuela = isset($_SESSION['escuela']) ? $_SESSION['escuela'] : "No especificada";
$grado = isset($_SESSION['grado']) ? $_SESSION['grado'] : "No especificado";
$grupo = isset($_SESSION['grupo']) ? $_SESSION['grupo'] : "No especificado";
$turno = isset($_SESSION['turno']) ? $_SESSION['turno'] : "No especificado";

// Crear una instancia de MPDF
$mpdf = new \Mpdf\Mpdf();
$html = '
    <div style="text-align: center;">
        <img src="/TestCIIEA/assets/imgs/tabedu.png" alt="Logo" style="width: 100px;"/>
        <img src="/TestCIIEA/assets/imgs/logo.png" alt="Logo" style="width: 100px;"/>
        <h1 style="color: #007BFF;">Reporte de Estilos de Aprendizaje</h1>
        <p>Fecha de generación: ' . $fecha . '</p>
    </div>';

// Añadir datos del alumno
$html .= '
    <h3>Datos del Alumno:</h3>
    <p><strong>Nombre:</strong> ' . htmlspecialchars($nombres) . '</p>
    <p><strong>Escuela:</strong> ' . htmlspecialchars($escuela) . '</p>
    <p><strong>Grado:</strong> ' . htmlspecialchars($grado) . '</p>
    <p><strong>Grupo:</strong> ' . htmlspecialchars($grupo) . '</p>
    <p><strong>Turno:</strong> ' . htmlspecialchars($turno) . '</p>
    <hr>';

// Añadir resultados de estilos de aprendizaje
$html .= '
    <h3>Resultados de Estilos de Aprendizaje</h3>
    <p>Estos son los porcentajes de afinidad a cada estilo de aprendizaje:</p>
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>Estilo</th>
                <th>Porcentaje</th>
            </tr>
        </thead>
        <tbody>';

// Añadir los estilos de aprendizaje y sus porcentajes
foreach ($resultados as $estilo => $porcentaje) {
    $html .= '
        <tr>
            <td>' . ucfirst($estilo) . '</td>
            <td>' . htmlspecialchars($porcentaje) . '%</td>
        </tr>';
}

$html .= '
        </tbody>
    </table>
    <h4 class="text-center mt-4">Actividades para mejorar cada estilo:</h4>
    <ul>
        <li>Visual: Observa imágenes y gráficos relacionados con los temas de estudio.</li>
        <li>Auditivo: Escucha audiolibros o graba tus notas en audio.</li>
        <li>Kinestésico: Realiza actividades prácticas como maquetas o experimentos.</li>
        <li>Verbal: Practica leer en voz alta o explicar conceptos a otros.</li>
    </ul>';

// Generar y descargar el PDF
$mpdf->WriteHTML($html);
$mpdf->Output('reporte_estilos_aprendizaje.pdf', 'D');

// Añadir redirección a index.php después de la descarga
echo "<script type='text/javascript'>
        setTimeout(function(){
            window.location.href = '/TestCIIEA/index.php';
        }, 2000); // Tiempo de espera ajustable
      </script>";

exit;
?>
