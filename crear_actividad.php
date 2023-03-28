<?php

include("conexion_db.php");

// if ($conexion){
//     echo "Conexión";
// } else {
//     echo "error";
// }

if (isset($_POST['crearActividad'])){

    if(!empty($_POST['nombre_actividad']) && !empty($_POST['fecha_actividad']) && !empty($_POST['estado_actividad']) && !empty($_POST['cedula_usuario'])){

        if (strlen($_POST['nombre_actividad']) >= 1 && strlen($_POST['fecha_actividad']) >= 1 && strlen($_POST['estado_actividad']) >= 1 && strlen($_POST['cedula_usuario'])){

            $nombreActividad = trim($_POST['nombre_actividad']);
            $fechaActividad = trim($_POST['fecha_actividad']);
            $estadoActividad = trim($_POST['estado_actividad']);
            $cedulaUsuario = trim($_POST['cedula_usuario']);
            $fechaRegistro = date("d/m/y");

            $consulta = "INSERT INTO tbl_creacion_de_actividad(nombreActividad, fechaActividad, estadoActividad, cedulaUsuario, fechaRegistro) VALUES ('$nombreActividad','$fechaActividad','$estadoActividad','$cedulaUsuario','$fechaRegistro')";

            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                ?>
                <h3 class="ok">¡Se creó actividad correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
                <?php
            }
    
        }
    
    } else {
        ?>
        <h3 class = "bad">¡Por favor complete todos los campos!</h3>
        <?php
    }

} else if (isset($_POST['atras'])){

    header("location:frm_menu_inicio_super_usuarios.php");
    exit();

}

?>