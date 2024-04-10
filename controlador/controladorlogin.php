<?php
session_start();
if(!empty($_POST["btningresar"])) {
    if(!empty($_POST["usuario"]) && !empty($_POST["password"])) { // Corregí un error de sintaxis en esta línea
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        // Utilizamos una consulta preparada para evitar la inyección SQL
        $stmt = $conexion->prepare("SELECT * FROM usersapp WHERE correo = ? AND contrasena = ?");
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows == 1) {
            $datos = $result->fetch_object();
            $_SESSION["nif"] = $datos->nif;
            $_SESSION["nombre"] = $datos->nombre;
            header("location: inicio.php");
        } else {
            echo "<div>Acceso denegado</div>";
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
