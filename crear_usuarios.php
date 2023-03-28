<?php

include("conexion_db.php");

// if ($conexion){
//     echo "Conexión";
// } else {
//     echo "error";
// }

if (isset($_POST['crear_usuario'])){

    if(!empty($_POST['cedula']) && !empty($_POST['primer_nombre']) && !empty($_POST['primer_apellido']) && !empty($_POST['cargo']) && !empty($_POST['contraseña_nuevo_usuario'])){

        if (strlen($_POST['cedula']) >= 1 && strlen($_POST['primer_nombre']) >= 1 && strlen($_POST['primer_apellido']) >= 1 && strlen($_POST['cargo']) >= 1 && strlen($_POST['contraseña_nuevo_usuario'])){

            $cedula = trim($_POST['cedula']);
            $primerNombre = trim($_POST['primer_nombre']);
            $segundoNombre = trim($_POST['segundo_nombre']);
            $primerApellido = trim($_POST['primer_apellido']);
            $segundoApellido = trim($_POST['segundo_apellido']);
            $cargo = trim($_POST['cargo']);
            $password = trim($_POST['contraseña_nuevo_usuario']);
            $fechaRegistro = date("d/m/y");

            $consulta = "INSERT INTO tbl_crecaion_de_usuario(Cedula_usuario, Nombre_usuario, Segundo_nombre, Primer_apellido, Segundo_apellido, Cargo, Contraseña, Fecha_Registro) VALUES ('$cedula','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$cargo','$password','$fechaRegistro')";

            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                ?>
                <h3 class="ok">¡Se creó usuario correctamente!</h3>
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