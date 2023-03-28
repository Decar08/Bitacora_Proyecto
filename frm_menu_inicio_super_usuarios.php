<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Inicio Administrador</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Menú de Inicio Administrador</h2>
        <br>
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <br>
        <article id="fondo">
            <button class="actividades" onclick="window.location.replace('frm_lista_actividades.php');">Lista de Actividades</button>
            <br>
            <br>
            <button class="pqr" onclick="window.location.replace('frm_lista_pqr.php');">Lista de PQR</button>
            <br>
            <br>
            <button class="usuarios" onclick="window.location.replace('frm_lista_usuarios.php');">lista de Usuarios</button>
            <br>
            <br>
            <button class="crear" onclick="window.location.replace('frm_creacion_usuarios.php');">Crear Nuevo Usuario</button>
            <br>
            <br>
            <button class = "Crear_Pqr" onclick="window.location.replace('frm_crear_pqr_user.php');">Crear PQR</button>
            <br>
            <br>
            <button class = "Crear_Actividad" onclick="window.location.replace('frm_crear_actividad.php');">Crear Actividad</button>
            <br>
            <br>
        </article>
        <br>
        <br>
    </section>
    <br>
    <footer id="pie">
        <br>
        <a href="mailto:oedeart@soy.sena.edu.co">Contáctame aquí</a>
        <p>Copyright 2023</p>
        <!-- <img src="img/logofrutaxcolblack.png" width="200"/> -->
    </footer>
</body>
</html>