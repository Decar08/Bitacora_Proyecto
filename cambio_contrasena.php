<?php

include("conexion_db.php");

// if($conexion){
//     echo "todo correcto";
// }

if (isset($_POST['Guardar'])){

    if (strlen($_POST['user']) >= 1 && strlen($_POST['newPass']) >= 1 && strlen($_POST['confirPass']) >= 1 ){

        if($_POST['newPass'] == $_POST['confirPass']){

            $user = trim($_POST['user']);
            $newPass = trim($_POST['newPass']);
            $confirPass = trim($_POST['confirPass']);
            $fechaRegistro = date("d/m/y");

            $consulta = "INSERT INTO cambio_de_contrasena(Cedula_Usuario, Nueva_Contraseña, Confirmar_Contraseña, Fecha_Registro) VALUES ('$user','$newPass','$confirPass','$fechaRegistro')";

            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                ?>
                <h3 class = "ok">¡Cambio de copntraseña exitoso!</h3>
                <?php
            } else {
                ?>
                <h3 class = "bad">¡Ocurrio un Error!</h3>
                <?php
            } 

        } else {
            ?>
            <h3 class = "bad">¡Las contraseñas no coinciden!</h3>
            <?php
        }

    } else {
        ?>
        <h3 class = "bad">¡Por favor complete todos los campos!</h3>
        <?php
    }
} else if (isset($_POST['atras'])){

    header("location:principal.php");
    exit();

}

?>