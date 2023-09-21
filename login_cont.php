<?php
session_start();

if (!empty($_POST["btningresar"])) {
    //echo "Boton precionado";
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $cn->query(" select *from usuario where usuario = '$usuario' and contrasenia ='$password'");
        if ($datos = $sql->fetch_object()) {
            
            $_SESSION["id"]= $datos->id_usuario;
            $_SESSION["nombres"]= $datos->nombre;
            $_SESSION["apellidos"]= $datos->apellido;
       


            header ("location:home.php");
        } else {
            echo "<div>Acceso Denegado</div>";
        }

    } else {
        echo "Campos vacios";
    }
}

