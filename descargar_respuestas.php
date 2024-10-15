<?php
include('config.php');
require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set("America/Mexico_City");
$fecha = date("d/m/Y");

// Verifica el formato solicitado
$format = $_POST['format'];

// Consulta para obtener los datos de la base de datos
$sql = "SELECT p.pregunta, r.nombres, r.escuela, r.grado, r.grupo, r.turno, r.respuesta, r.observacion, r.created
        FROM respuestas_encuesta r
        JOIN preguntas p ON r.id_pregunta = p.id";
$result = mysqli_query($con, $sql);

if ($format == 'pdf') {
    // Inicializar PDF
    $mpdf = new \Mpdf\Mpdf();
    $html = '
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="ruta/a/tu/logo.png" alt="Logo" style="width: 100px;"/>
        <h1 style="color: #007BFF; font-size: 24px;">Reporte de Respuestas de la Encuesta</h1>
        <p style="font-size: 14px;">Fecha de generación: ' . $fecha . '</p>
    </div>';

    $html .= '
    <table style="width: 100%; border-collapse: collapse; text-align: center;">
        <thead>
            <tr style="background-color: #007BFF; color: #ffffff;">
                <th style="padding: 10px; font-size: 12px;">Pregunta</th>
                <th style="padding: 10px; font-size: 12px;">Nombre</th>
                <th style="padding: 10px; font-size: 12px;">Escuela</th>
                <th style="padding: 10px; font-size: 12px;">Grado</th>
                <th style="padding: 10px; font-size: 12px;">Grupo</th>
                <th style="padding: 10px; font-size: 12px;">Turno</th>
                <th style="padding: 10px; font-size: 12px;">Respuesta</th>
                <th style="padding: 10px; font-size: 12px;">Observaciones</th>
                <th style="padding: 10px; font-size: 12px;">Fecha</th>
            </tr>
        </thead>
        <tbody>';

    // Alternar colores en las filas
    $rowColor = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $bgColor = $rowColor ? "#f2f2f2" : "#ffffff";
        $html .= '
            <tr style="background-color: ' . $bgColor . ';">
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['pregunta']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['nombres']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['escuela']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['grado']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['grupo']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['turno']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['respuesta']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['observacion']) . '</td>
                <td style="padding: 8px; font-size: 12px;">' . htmlspecialchars($row['created']) . '</td>
            </tr>';
        $rowColor = !$rowColor;
    }

    $html .= '
        </tbody>
    </table>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('respuestas_encuesta.pdf', 'D'); // 'D' fuerza la descarga

    // Eliminar los datos después de la descarga
    $deleteSQL = "DELETE FROM respuestas_encuesta WHERE 1";
    mysqli_query($con, $deleteSQL);
}
exit;
?>
