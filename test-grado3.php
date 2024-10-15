<?php
session_start(); // Iniciar la sesión

// Verificar si las variables de sesión están definidas
if (isset($_SESSION['nombres'])) {
    $nombres = $_SESSION['nombres'];
} else {
    $nombres = "Usuario";
}

if (isset($_SESSION['escuela'])) {
    $escuela = $_SESSION['escuela'];
} else {
    $escuela = "No especificada";
}

if (isset($_SESSION['grado'])) {
    $grado = $_SESSION['grado'];
} else {
    $grado = "No especificado";
}

if (isset($_SESSION['turno'])) {
    $turno = $_SESSION['turno'];
} else {
    $turno = "No especificado";
}

if (isset($_SESSION['grupo'])) {
    $grupo = $_SESSION['grupo'];
} else {
    $grupo = "No especificado";
}

include('config.php');  // Incluyendo la conexión a la base de datos

// Consultar las preguntas desde la base de datos
$sqlPreguntas = "SELECT * FROM preguntas2 WHERE status='1'";
$query = mysqli_query($con, $sqlPreguntas);

$arrayRespuestas = array(
    "SI" => "Sí",
    "NO" => "No",
    "Tal_vez" => "Tal vez"
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/icon/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/encuesta.css"> <!-- Referencia al CSS externo -->
    <title>Test de estilos de aprendizajes</title>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <img src="assets/imgs/logo.png" class="logo"  style="width: 100px;">
        <img src="assets/imgs/tabedu.png" class="tabedu" alt="Tab Edu" style="width: 50px; margin-left: auto;">
        <h2 class="navbar-title">Test De Estilos De Aprendizajes Para Secundaria</h2>
        <div class="navbar-collapse">
            <div class="navbar-nav">
                <span class="nav-item"><strong>Nombre:</strong> <span id="nombres"><?php echo htmlspecialchars($nombres); ?></span></span>
                <span class="nav-item"><strong>Escuela:</strong> <span id="escuela"><?php echo htmlspecialchars($escuela); ?></span></span>
                <span class="nav-item"><strong>Grado:</strong> <span id="grado"><?php echo htmlspecialchars($grado); ?></span></span>
                <span class="nav-item"><strong>Turno:</strong> <span id="turno"><?php echo htmlspecialchars($turno); ?></span></span>
                <span class="nav-item"><strong>Grupo:</strong> <span id="grupo"><?php echo htmlspecialchars($grupo); ?></span></span>
                <span class="nav-item"><strong>Fecha:</strong> <?php echo date('Y-m-d'); ?></span>
            </div>
        </div>
        
    </div>
</nav>


        <br><br>
        <h4 class="text-center">Completa El Test y Al Finalizar Da Clic En Enviar.</h4>
        <hr>

        <form id="formFormatoGS" action="assets/procesos/procesar_encuesta_third_grade.php" method="POST">
            <table class="space padding-sm table table-striped">
                <thead>
                    <tr id="cabecera">    
                        <th>#</th>
                        <th>Pregunta</th>
                        <th style="font-size:12px">Selecciona una respuesta</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    // Generar preguntas dinámicamente desde la base de datos
                    while ($dataRow = mysqli_fetch_array($query)) { ?>
                        <tr id="pregunta_<?php echo $dataRow['id']; ?>">
                            <td><?php echo $dataRow['id']; ?></td>
                            <td><?php echo htmlspecialchars($dataRow['pregunta2']); ?></td>

                            <td width="170">
                                <select name="respuesta[<?php echo $dataRow['id']; ?>]" class="form-select" required>
                                    <option value="">Selecciona una respuesta</option>
                                    <?php
                                        foreach ($arrayRespuestas as $clave => $valor) { ?>
                                            <option value="<?php echo $clave; ?>"><?php echo $valor; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>

            <div class="form-group">
                <label for="observacion">Observaciones</label>
                <textarea id="textarea" name="observacion" class="form-control" rows="3" placeholder="No hay observación"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="btnSend">Enviar</button>

            <div class="progress mt-3">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    0%
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="assets/js/encuesta.js"></script> <!-- Referencia al JS externo -->

<footer class="text-center footer">
    <p>&copy; <span id="currentYear"></span> CENTRO DE INVESTIGACIÓN E INNOVACIÓN PARA LA ENSEÑANZA Y EL APRENDIZAJE (CIIEA).</p>
</footer>

</body>
</html>
