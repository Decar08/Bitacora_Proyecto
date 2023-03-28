<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Crear Actividad</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Módulo Creación de Actividades</h2>
        <br>
        <br>
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <br>
        <article id="fondo">
            <form method="post">
                <label for="nombre_actividad">Nombre Actividad</label>
                <input type="text" name="nombre_actividad" id="nombre_actividad">
                <br>
                <br>
                <label for="fecha_actividad">Fecha Actividad</label>
                <input type="text" name="fecha_actividad" id="fecha_actividad" placeholder="dd/mm/aa"/>
                <br>
                <br>
                <label for="estado_actividad">Estado Actividad</label>
                <input type="text" name="estado_actividad" id="estado_actividad"/>
                <br>
                <br>
                <label for="cedula_usuario">Cédula Empleado</label>
                <input type="number" name="cedula_usuario" id="cedula_usuario"/>
                <br>
                <br>
                <br>
                <button class="atras" name="atras">Atrás</button>
                <button class="crearuser" type="submit" name = "crearActividad">Crear Actividad</button>
                <br>
            </form>
        </article>
        <br>        
    </section>
    <br>
    <br>
    <footer id="pie">
        <br>
        <a href="mailto:oedeart@soy.sena.edu.co">Contáctame aquí</a>
        <p>Copyright 2023</p>
        <!-- <img src="img/logofrutaxcolblack.png" width="200"/> -->
    </footer>
    <?php
    include("crear_actividad.php");
    ?>
    <!-- <script src="/main.js"></script> -->
</body>
</html>