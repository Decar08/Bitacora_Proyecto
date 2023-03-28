<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <!-- <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button> -->
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Cambiar Contraseña</h2>        
        <br>
        <br>        
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <article id="fondo">
            <form method="post">
                <br>
                <br>
                <input class="user" name ="user" type="text" id="Usuario" placeholder="Usuario"/>
                <br>
                <br>
                <input class="newPass" name ="newPass" type="password" id="NewPassword" placeholder="Nueva Contraseña"/>
                <br>
                <br>
                <input class="confirPass" name="confirPass" type="password" id="ConfirPassword" placeholder="Confirmar Contraseña"/>
                <br>
                <br>
                <br>
                <button class="atras" name="atras">Atrás</button>
                <button class="crearuser" type="submit" name = "Guardar">Guardar</button>
                <br>
                <br>
            </form>
        </article>        
    </section>
    <br>
    <br>
    <footer id="pie">
        <br>
        <!-- <a href="mailto:oedeart@soy.sena.edu.co">Contáctame aquí</a> -->
        <!-- <img class="logoPie" src="img/logofrutaxcolblack.png" width="200"/> -->
        <p>Copyright 2023</p>
    </footer>
    <?php
    include("cambio_contrasena.php");
    ?>
    <!-- <script src="/main.js"></script> -->
</body>
</html>