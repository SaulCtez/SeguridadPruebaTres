<?php
session_start();
if(empty($_SESSION["nif"])){
    header("location: login.php");
}
include 'controlador/config.php';
include 'controlador/conexion.php';
include 'Carrito.php';
include 'templates/cabecera.php';
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="inicio.php">Empresa</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MostrarCarrito.php">Carrito(
                        /*<?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>*/
                    )</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Secciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="distopia.php">Distopìa</a></li>
            <li><a class="dropdown-item" href="fantasia.php">Fantasia</a></li>
            <li><a class="dropdown-item" href="terror.php">Terror</a></li>
          </ul>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="controlador/controlador_cerrar_session.php" tabindex="-1" aria-disabled="true">salir</a>
                </li>
            </ul>
        </div>
    </nav>
</br>
-->
    <br>
    <?php if($mensaje!=""){?>
    <div class="alert alert-success" role="alert">
    <?php echo $mensaje;?>
        
        <a href="MostrarCarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
    <?php }?>
    <br>
    <div class="container">
    <h1>Principal</h1>
    <br>
    <div class="row">
        <?php
        $sentencia=$pdo->prepare("SELECT * FROM `tbl-productos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
        ?>
        <?php foreach ($listaProductos as $producto){ ?>
            <div class="col-3">
            <div class="card">
                <img 

                title="<?php echo $producto['Descripcion'];?>"
                class="card-img-top" 
                src="<?php echo $producto['Imagen'];?>" 
                alt="<?php echo $producto['Nombre'];?>"
                
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['Descripcion'];?>"
                height="317px"
                >

                <div class="card-body">
                    <span><?php echo $producto['Nombre'];?></span>
                    <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                    <p class="card-text">Descripcion</p>

                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                    <button class="btn btn-primary" 
                    name="btnAccion" 
                    value="Agregar" 
                    type="submit">
                     Agregar al carrito
                    </button>

                    </form>
                    
                </div>
            </div>
        </div>
        <?php
    } ?>
        
        

        
    </div>
    </div>

</div>
   
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  

</body>
</html>-->

<?php
include 'templates/pie.php';
?>    