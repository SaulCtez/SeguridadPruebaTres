
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
            <h1>Login</h1>
            </div>
    <?php
    include "modelo/conexion.php";
    include "controlador/controladorlogin.php"
    ?>
    <div class="card-body">
    <form action="" method="post" style="background-color: lightblue; padding: 20px; border-radius: 10px;">
        <div class="mb-3"> 
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" id="usuario" name="usuario" class="form-control" style="background-color: lightyellow; border: 1px solid darkblue;"> 
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control" style="background-color: lightyellow; border: 1px solid darkblue;">
        </div>

        <input type="submit" name="btningresar" class="btn btn-primary" value="Iniciar sesion">
        <a href="registro.php"> Registrate aqui</a>
    </form>
    </div>
    <div class="mb-3">
    <p>¿Olvidaste tu contraseña? <a href="recuperar.php"> Recuperar</a></p>
    </div>
    
            </div>
        </div>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>    
</body>
</html>