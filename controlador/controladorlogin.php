<?php
session_start();
if(!empty($_POST["btningresar"])){
    if(!empty($_POST["usuario"] and !empty($_POST["password"]))){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usersapp where correo='$usuario' and contrasena='$password'");
        if($datos=$sql->fetch_object()){
            $_SESSION["nif"]=$datos->nif;
            $_SESSION["nombre"]=$datos->nombre;
            header("location: inicio.php");
        }else{
            echo "<div>Acceso denegado</div>";
        }
    }else{
        echo "campos vacios";
    }


}
?>