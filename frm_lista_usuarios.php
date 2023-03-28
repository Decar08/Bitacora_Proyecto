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
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <header id="cabecera">
        <button class="salir"><img src="img/salir.png" width="25" onclick="window.location.replace('principal.php');"/></button>
        <br>
        <br>
        <img src="img/logofrutaxcol.PNG" width="200"/>
        <h2 class="subtitulo">Módulo Lista de Usuarios</h2>
        <br>
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
                    <td class="tituloColumna">Cédula Usuario</td>
                    <td class="tituloColumna">Primer Nombre</td>
                    <td class="tituloColumna">Segundo Nombre</td>
                    <td class="tituloColumna">Primer Apellido</td>
                    <td class="tituloColumna">Segundo Apellido</td>
                    <td class="tituloColumna">Cargo</td>
                    <td class="tituloColumna">Contraseña</td>
                    <td class="tituloColumna">Fecha Registro</td>
                </tr>

                <?php

                $sql = "select * from tbl_crecaion_de_usuario";
                $resultado = mysqli_query($conexion, $sql);

                while($mostrar=mysqli_fetch_array($resultado)){

                ?>

                <tr>
                    <td><?php echo $mostrar ['id']?></td>
                    <td><?php echo $mostrar ['Cedula_usuario']?></td>
                    <td><?php echo $mostrar ['Nombre_usuario']?></td>
                    <td><?php echo $mostrar ['Segundo_nombre']?></td>
                    <td><?php echo $mostrar ['Primer_apellido']?></td>
                    <td><?php echo $mostrar ['Segundo_apellido']?></td>
                    <td><?php echo $mostrar ['Cargo']?></td>
                    <td><?php echo $mostrar ['Contraseña']?></td>
                    <td><?php echo $mostrar ['Fecha_Registro']?></td>
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