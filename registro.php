<?php

include 'controlador/config.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Registro</h1>
                </div>
                <div class="card-body">
                    <form method="post" style="background-color: lightblue; padding: 20px; border-radius: 10px;">
                        <div class="mb-3">
                            <label for="NIF" class="form-label">NIF</label>
                            <input type="text" class="form-control" id="NIF" name="NIF" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <div class="mb-3">
                            <label for="EMAIL" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="EMAIL" name="EMAIL" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <div class="mb-3">
                            <label for="PASSWORD" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="PASSWORD" name="PASSWORD" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <div class="mb-3">
                            <label for="NOMBRE" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <div class="mb-3">
                            <label for="DIRECCION" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="DIRECCION" name="DIRECCION" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <div class="mb-3">
                            <label for="TELEFONO" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="TELEFONO" name="TELEFONO" style="background-color: lightyellow; border: 1px solid darkblue;">
                        </div>
                        <input type="submit" name="register">
                        <a href="login.php" class="btn btn-secondary">Volver</a>
                    </form>
                    <?php include 'controlador/pararegistro.php'                   ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>    
</body>
</html>