<?php
include 'controlador/config.php';
include  'controlador/conexion.php'; 
include 'Carrito.php';
include 'templates/cabecera.php';
?>

    <br>
    <?php if($mensaje!=""){?>
    <div class="alert alert-success" role="alert">
    <?php echo $mensaje;?>
        
        <a href="MostrarCarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
    <?php }?>
    <br>
    <h1>Terror</h1>
    <div class="row">
        <?php
        $sentencia=$pdo->prepare("SELECT * FROM `tbl-terror`");
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
   
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
<?php
include 'templates/pie.php';
?>