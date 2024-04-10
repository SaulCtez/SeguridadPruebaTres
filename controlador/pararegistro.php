<?php
include 'conexlog.php';

if(!empty($_POST["register"])){
    if(empty($_POST['NIF']) or empty($_POST['EMAIL']) or empty($_POST['PASSWORD']) or empty($_POST['NOMBRE']) or empty($_POST['DIRECCION'])
    or empty($_POST['TELEFONO'])){
        echo "Uno de los campos no esta completado";
    }else{
        $NIF=$_POST['NIF'];
        $correo=$_POST['EMAIL'];
        $password=$_POST['PASSWORD'];
        $name=$_POST['NOMBRE'];
        $direc=$_POST['DIRECCION'];
        $telefono=$_POST['TELEFONO'];
        
        $sql=$conn->query("insert into usersapp(nif, correo, nombre, direccion,telefono, contrasena)
        values('$NIF','$correo','$name','$direc','$telefono','$password')");
        if($sql==1){
            echo 'Ususario registrado';
            header("location: login.php");
            exit();
        }else{
            echo 'Error';
        }
    }
}
?>