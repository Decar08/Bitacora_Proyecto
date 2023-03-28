<?php

include("conexion_db.php");

// if ($conexion){
//     echo "Conexión";
// } else {
//     echo "error";
// }

if(isset($_POST["iniciarSesion"])){
    if(empty($_POST["usuario"]) && empty($_POST["password"])){
        
        // echo "Diligencie los campos";

        ?>
        <h3 class="bad">¡Diligencie los campos!</h3>
        <?php

    } else {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $sql = $conexion->query("select * from tbl_crecaion_de_usuario where Cedula_usuario = '$usuario' && Contraseña = '$password'");

        if($datos = $sql->fetch_object()){

            header("location:frm_menu_inicio_super_usuarios.php");

        } else {
            ?>
            <h3 class="bad">¡Verifica usuario o contraseña!</h3>
            <?php
        }

    }

}

?>