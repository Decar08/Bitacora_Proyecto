<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Crear PQR Usuario</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera"> 
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Módulo Creación de PQR Usuario</h2>
        <br>
        <br>
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <br>
        <article id="fondo">
            <form method="post">
                <label for="nombre_pqr">Nombre PQR</label>
                <input type="text" name="nombre_pqr" id="nombre_pqr">
                <br>
                <br>
                <label for="fecha_pqr">Fecha Pqr</label>
                <input type="text" name="fecha_pqr" id="fecha_pqr" placeholder="dd/mm/aa"/>
                <br>
                <br>
                <label for="estado_pqr">Estado PQR</label>
                 <input type="text" name="estado_pqr" id="estado_pqr"/>
                <br>
                <br>
                <label for="cedula_usuario">Cédula Empleado</label>
                <input type="number" name="cedula_usuario" id="cedula_usuario"/>
                <br>
                <br>
                <button class="atras" name="atras">Atrás</button>
                <button class="crearuser" type="submit" name = "crearPqr">Crear Pqr</button>
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
    include("crear_pqr_user.php");
    ?>
</body>
</html>