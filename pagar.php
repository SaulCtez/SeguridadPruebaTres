<?php
include 'controlador/config.php';
include  'controlador/conexion.php'; 
include 'Carrito.php';
include 'templates/cabecera.php';
?>
<!--Pago-->
<?php
if($_POST){
    $SID=session_id(); 
    $total=0;
    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }
    /*video 18*/
    $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
    (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Total`, `Status`) 
    VALUES (NULL, :ClaveTransaccion, '', NOW(),:Total, 'pendiente');");
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $sentencia=$pdo->prepare("INSERT INTO 
        `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();
    
    }
    //echo "<h3>".$total."</h3>";
}
?>

<script src="https://www.paypal.com/sdk/js?client-id=AZCa2wxc0VEnIpb1a_Amm3Cpaj8Q2OYcYY3T0c-tfMHwv6xYPuVAr6dSPHglfLy5cBdO2SP3RLe10GOD&
currency=MXN"></script>

<div class="jumbotron text-center">
    <h1 class="display-4">Pago final</h1>
    <hr class="my-4">
    <p class="lead">Vas a pagar la cantidad de:
        <h4>$<?php echo number_format($total,2); ?></h4>
        <div id="paypal-button-container">
        <script>
        paypal.Buttons({
            style:{
                color: 'gold',
                shape: 'pill',
                label: 'pay'
            },
            

            
        }).render('#paypal-button-container');
    </script>
        </div>
    </p>
    <p>Los productos se enviaran una vez hecho el pago.</p>
</div>





    
    
 

    

<?php
include 'templates/pie.php';
?>


<!--$correo=$_POST['email']; esto va en la linea 20 despues del now para correo  :Correo,  //$sentencia->bindParam(":Correo",$correo); -->

