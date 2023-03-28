<?php

include("conexion_db.php");

// if ($conexion){
//     echo "Conexión";
// } else {
//     echo "error";
// }
?>

<!DOCTYPE html>
<html id="fondo_principal">
<head>
    <meta charset="UTF-8">
    <title>Lista de PQRs</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Lista de PQRs</h2>
        <br>
    </header>
    <br>
    <br>
    <section id="cuerpo">
        <br>
        <article id="fondo">
        <table class="content-table">
                <tr>
                    <td class="tituloColumna">id</td>
                    <td class="tituloColumna">Nombre Pqr</td>
                    <td class="tituloColumna">Fecha Pqr</td>
                    <td class="tituloColumna">Estado Pqr</td>
                    <td class="tituloColumna">Cédula Usuario</td>
                    <td class="tituloColumna">Fecha Registro</td>
                </tr>

                <?php

                $sql = "select * from tbl_creacion_pqr_user";
                $resultado = mysqli_query($conexion, $sql);

                while($mostrar=mysqli_fetch_array($resultado)){

                ?>

                <tr>
                    <td><?php echo $mostrar ['id']?></td>
                    <td><?php echo $mostrar ['nombrePqr']?></td>
                    <td><?php echo $mostrar ['fechaPqr']?></td>
                    <td><?php echo $mostrar ['estadoPqr']?></td>
                    <td><?php echo $mostrar ['cedulaUsuario']?></td>
                    <td><?php echo $mostrar ['fechaRegistro']?></td>
                </tr>

            <?php
            }
            ?>
            </table>
            <br>
            <br>
            <button class="atras" onclick="window.location.replace('frm_menu_inicio_super_usuarios.php');">Atrás</button>
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
</body>
</html>