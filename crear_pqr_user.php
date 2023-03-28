<?php

include("conexion_db.php");

// if ($conexion){
//     echo "Conexión";
// } else {
//     echo "error";
// }

if (isset($_POST['crearPqr'])){

    if(!empty($_POST['nombre_pqr']) && !empty($_POST['fecha_pqr']) && !empty($_POST['estado_pqr']) && !empty($_POST['cedula_usuario'])){

        if (strlen($_POST['nombre_pqr']) >= 1 && strlen($_POST['fecha_pqr']) >= 1 && strlen($_POST['estado_pqr']) >= 1 && strlen($_POST['cedula_usuario'])){

            $nombrePqr = trim($_POST['nombre_pqr']);
            $fechaPqr = trim($_POST['fecha_pqr']);
            $estadoPqr = trim($_POST['estado_pqr']);
            $cedulaUsuario = trim($_POST['cedula_usuario']);
            $fechaRegistro = date("d/m/y");

            $consulta = "INSERT INTO tbl_creacion_pqr_user(nombrePqr, fechaPqr, estadoPqr, cedulaUsuario, fechaRegistro) VALUES ('$nombrePqr','$fechaPqr','$estadoPqr','$cedulaUsuario','$fechaRegistro')";

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