<?php
session_start(); // Iniciar la sesión

include('config.php');

// Verificar si los datos fueron enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario de manera segura
    $nombres = mysqli_real_escape_string($con, $_POST['nombres']);
    $escuela = mysqli_real_escape_string($con, $_POST['escuela']);
    $grado = mysqli_real_escape_string($con, $_POST['grado']);
    $turno = mysqli_real_escape_string($con, $_POST['turno']);
    $grupo = mysqli_real_escape_string($con, $_POST['grupo']);
    
    // Crear la consulta SQL para insertar los datos
    $sql = "INSERT INTO grupo (nombres, escuela, grado, turno, grupo) VALUES ('$nombres', '$escuela', '$grado', '$turno', '$grupo')";
    
    // Ejecutar la consulta
    if (mysqli_query($con, $sql)) {
        // Guardar los datos en la sesión
        $_SESSION['nombres'] = $nombres;
        $_SESSION['escuela'] = $escuela;
        $_SESSION['grado'] = $grado;
        $_SESSION['turno'] = $turno;
        $_SESSION['grupo'] = $grupo;
        
        // Redirigir a la página del test o a la siguiente página que desees
        header("Location: test-grado$grado.php");
        exit;
    } else {
        echo "Error al guardar los datos: " . mysqli_error($con);
    }
}

// Cerrar la conexión
mysqli_close($con);
?>
