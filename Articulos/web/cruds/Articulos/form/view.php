<?php

    require_once 'C:/UwAmp/www/Articulos/app/controllers/ArticulosController.php';

    ArticulosController::find( @$_REQUEST['id'] );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Home</title> 
    <!-- <link rel="stylesheet" href="../../../utils/css/all.css"> -->

    <!-- <link rel="stylesheet" href="./css/usuarios.css"> -->
    <link rel="stylesheet" href="../../../utils/css/forms/form.css">
    <!-- <link rel="stylesheet" href="../../utils/css/cruds/crud.css"> -->
    <link rel="stylesheet" href="../../../utils/css/all.css">

</head>
<body>
    
    <side-bar> </side-bar>

    <section class="home">

 
        <div class="row">
            <ion-icon  class= "prymary-icon" name="person-circle-outline"></ion-icon>
            <h1 class="text">  Mira un Articulo </h1>
        </div>
        <br>

        <!-- <div class="mesaje">
            <ion-icon class='icon-info' name="information-circle-outline"></ion-icon>
            <p>El Usuario se a guardado correctamente.</p>
        </div>  -->

        <div class="form-contain">

            <div class="row back">
                 <ion-icon  onclick="history.back()" class= "prymary-icon" name="arrow-back-outline"></ion-icon>
                <h2>informacion del Articulo</h2>
            </div>
            <hr>

                
                    <div class="campos">

                        <div class="campo">
                            <span> Marca</span>
                            <input  value=<?php echo  @$_SESSION['Articulo']->marca ?> type="text" name="marca" id="marca" readonly> 
                        </div>

                        <div class="campo">
                            <span> Precio venta</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->precioventa ?> type="number" name="precioventa" id="precioventa" readonly> 
                        </div>

                        <div class="campo">
                            <span> Precio compra</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->preciocompa ?> type="number" name="preciocompa" id="preciocompa" readonly> 
                        </div>

                        <div class="campo">
                            <span> iva</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->iva ?> type="number" name="iva" id="iva" readonly> 
                        </div>

                        <div class="campo">
                            <span> Modelo</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->modelo ?> type="text" name="modelo" id="modelo" readonly> 
                        </div>

                        <div class="campo">
                            <span> Proveedor</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->proveedor ?> type="text" name="proveedor" id="proveedor" readonly> 
                        </div>

                        <div class="campo">
                            <span> Tienda</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->tienda ?> type="text" name="tienda" id="tienda" readonly> 
                        </div>

                        <div class="campo">
                            <span> Cantidad</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->cantidad ?> type="number" name="cantidad" id="cantidad" readonly> 
                        </div>

                        <div class="campo">
                            <span> Descripcion</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->descripcion ?> type="text" name="descripcion" id="descripcion" readonly> 
                        </div>

                        <div class="campo">
                            <span> Categoria</span>
                            <input value=<?php echo  @$_SESSION['Articulo']->categoria ?> type="text" name="categoria" id="categoria" readonly> 
                        </div>

                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value=<?php echo @$_REQUEST['id'] ?> >

        
                    </div>



        </div>
        

    



        

  
    </section>


    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>


    
</body>

</html>