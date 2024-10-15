<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acitividad visual</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/TestCIIEA/assets/imgs/icon/logo.ico">
    <link rel="stylesheet" href="crucigrama.css">
    <link rel="stylesheet" href="/TestCIIEA/assets/css/third_grade/visual_activity.css">
    </head>
<body>
    <h2>Asociación de Términos Matemáticos</h2>
    <h2>Para completar esta actividad lee detenidamente las definiciones, luego manten presionado el termino matematico y arrastralo hasta su correcta definicion, una vez terminado y respondido correctamennte se habilitara el boton para ir a la siguiente actividad.</h2>
    <div class="container">
        <div class="columna izquierda">
            <h3>Términos Matemáticos</h3>
            <div class="termino" draggable="true" data-termino="suma">Suma</div>
            <div class="termino" draggable="true" data-termino="resta">Resta</div>
            <div class="termino" draggable="true" data-termino="multiplicacion">Multiplicación</div>
            <div class="termino" draggable="true" data-termino="division">División</div>
        </div>
        
        <div class="columna derecha">
            <h3>Definiciones</h3>
            <div class="definicion" data-definicion="suma">Operación para agregar dos números.</div>
           <div class="definicion" data-definicion="division">Operación para dividir un número por otro.</div>
            <div class="definicion" data-definicion="multiplicacion">Operación para encontrar el producto de dos números.</div>
             <div class="definicion" data-definicion="resta">Operación para quitar un número de otro.</div>
            
        </div>
    </div>
    <button id="siguiente" disabled onclick="irASiguienteActividad()">Siguiente actividad</button>
    <script src="/TestCIIEA/assets/js/third_grade/visual_activity.js"></script>
</body>
</html>
