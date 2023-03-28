<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Sistema de control Frutaxcol</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <h1 class="titulo">Sistema Bitacora de Control Diario</h1>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Sistema Frutaxcols S.A.S.</h2>
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <article id="fondo">
            <br>
            <img src="img/logouser.png" width="100"/>
            <br>
            <br>
            <form method="post">
                <input type="text" name="usuario" id="Usuario" placeholder="Cedula Usuario"/>
                <br>
                <br>
                <input type="password" name="password" id="Password" placeholder="Contraseña"/>
                <br>
                <br>
                <a class="forgetPass" href="frm_cambio_contrasena.php">Olvidé mi Contraseña</a>
                <br>
                <br>
                <br>
                <button name="iniciarSesion" class="admin" type="submit">Iniciar Sesión</button>
                <br>
                <br>
            </form>
        </article>  
    </section>
    <br>
    <footer id="pie">
        <br>
        <a calss="contacto" href="mailto:oedeart@soy.sena.edu.co">Contáctame aquí</a>
        <p>Copyright 2023</p>
        <!-- <img src="img/logofrutaxcolblack.png" width="200"/> -->
    </footer>
    <?php
    include("principal_verificacion.php");
    ?>
</body>
</html>