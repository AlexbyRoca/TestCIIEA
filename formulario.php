<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Registro de estudiante.</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css"> <!-- Enlace al CSS dinámico -->
</head>
<body>
    <div class="background">
        <div class="container mt-5">
            <!-- Contenedor de logos -->
            <div class="logo-container text-center mb-4">
                <img src="assets/imgs/tabedu.png" alt="Logo 2" class="logo-img">
                <img src="assets/imgs/logo.png" alt="Logo 3" class="logo-img">
            </div>

            <!-- Título principal -->
            
            <!-- Formulario -->
            <form id="form-grado" action="guardar_datos.php" method="POST" class="bg-light p-4 rounded shadow">
                <div class="form-group">
                    <label for="nombres">Nombre:</label>
                    <input type="text" id="nombres" name="nombres" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="escuela">Escuela Secundaria de Procedencia (Si eres de Telesecundaria, escríbelo por favor.):</label>
                    <input type="text" id="escuela" name="escuela" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="grado">Grado:</label>
                    <select id="grado" name="grado" class="form-control" required>
                        <option value="" disabled selected>Selecciona...</option>
                        <option value="1">Primero</option>
                        <option value="2">Segundo</option>
                        <option value="3">Tercero</option>
                    </select>
                </div>

                <!-- Selección de turno -->
                <div class="form-group">
                    <label for="turno">Turno:</label>
                    <select id="turno" name="turno" class="form-control" required>
                        <option value="" disabled selected>Selecciona...</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                    </select>
                </div>

                <!-- Selección de grupo -->
                <div class="form-group">
                    <label for="grupo">Grupo:</label>
                    <select id="grupo" name="grupo" class="form-control" required>
                        <option value="" disabled selected>Selecciona...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Ir al Test</button>
            </form>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6g1M91x25ME8DO3z6F7NITkPjBLzRBQ6S5xgOjKH1rcyxb4tLhAob1Xzrx5jkpMx" crossorigin="anonymous"></script>
</body>
</html>
