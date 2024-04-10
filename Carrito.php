<?php
session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':

            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="OK ID correcto".$ID;
            }
                

            else{
                    $mensaje.="UPs.. ID incorrecto".$ID;
                }
                if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                    $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                    $mensaje.="Ok nombre".$NOMBRE."<br/>";
                }else{
                    $mensaje.="UPs.. algo paso con el nombre"."<br/>"; break;
                }
    
                if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                    $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                    $mensaje.="Ok cantidad".$CANTIDAD."<br/>";
                }else{
                    $mensaje.="UPs.. algo paso con la cantidad"."<br/>"; break;
                }
    
                if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                    $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                    $mensaje.="Ok precio".$PRECIO."<br/>";
                }else{
                    $mensaje.="UPs.. algo paso con el precio"."<br/>"; break;
                }
    
                if(!isset($_SESSION['CARRITO'])){
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO,
                    );
                    $_SESSION['CARRITO'][0]=$producto;
                    $mensaje="Producto agregado al carrito";
    
                }else{
                    //video15 Que no se repita el producto
                    
                    /*$idProductos=array_column($_SESSION['CARRITO'],"ID");
                    if(in_array($ID,$idProductos)){
                        echo "<script>alert('El producto ya ha sido seleccionado...')</script>";
                        $mensaje="";
                    }else{
                    }*/

                    //Que no se repita el producto chat xd
                    /*$idProductos = array_column($_SESSION['CARRITO'], "ID");
$productoEnCarrito = false;

foreach ($idProductos as $idEnCarrito) {
    if ($ID == $idEnCarrito) {
        // Product is already in the cart
        $productoEnCarrito = true;
        break;
    }
}

if ($productoEnCarrito) {
    echo "<script>alert('El producto ya ha sido seleccionado...')</script>";
    $mensaje = "";
} else {
    // Proceed to add the product to the cart
    // ... (your existing code for adding the product goes here)
}*/

                    $idProductos=array_column($_SESSION['CARRITO'],"ID");
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO,
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                    $mensaje="Producto agregado al carrito";
                
                }
                //$mensaje=print_r($_SESSION,true);
                
            
                break;
                case "Eliminar":
                    if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                        $ID=openssl_decrypt($_POST['id'],COD,KEY);
                        foreach($_SESSION['CARRITO'] as $indice=>$producto){
                            if($producto['ID']==$ID){
                                unset($_SESSION['CARRITO'][$indice]);
                                echo "<script>alert('Elemento borrado...');</script>";
                            }

                        }
                    }
                        
        
                    else{
                            $mensaje.="UPs.. ID incorrecto".$ID;
                        }
                break;

            }
        }
        
    

?>
