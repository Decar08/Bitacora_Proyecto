<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Módulo Creación de Usuarios</h2>
        <br>
        <br>
    </header>
    <br>
    <br>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <section id="cuerpo">
        <br>
        <article id="fondo">
            <form action="frm_creacion_usuarios.php" method="post">
                <input type="number" name="cedula" id="cedula_usuario" placeholder="* Cédula Usuario"/>
                <br>
                <br>
                <input type="text" name="primer_nombre" id="primer_nombre" placeholder="* Primer Nombre">
                <br>
                <br>
                <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre"/>
                <br>
                <br>
                <input type="text" name="primer_apellido" id="primer_apellido" placeholder="* Primer Apellido"/>
                <br>
                <br>
                <input type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido"/>
                <br>
                <br>
                <input type="text" name="cargo" id="cargo" placeholder="* Cargo"/>
                <br>
                <br>
                <input type="password" name="contraseña_nuevo_usuario" id="contraseña_nuevo_usuario" placeholder="* Contraseña"/>
                <br>
                <br>
                <br>
                <button class="atras" name="atras">Atrás</button>
                <button class="crearuser" type="submit" name = "crear_usuario">Crear Usuario</button>
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
    include("crear_usuarios.php");
    ?>
    <!-- <script src="/main.js"></script> -->
</body>
</html>