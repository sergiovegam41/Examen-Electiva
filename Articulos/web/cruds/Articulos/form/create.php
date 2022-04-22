<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Home</title> 
        <link rel="stylesheet" href="../../../utils/css/forms/form.css">
    <link rel="stylesheet" href="../../../utils/css/all.css">

</head>
<body>
    
    <side-bar> </side-bar>

    <section class="home">

 
        <div class="row">
            <ion-icon  class= "prymary-icon" name="person-circle-outline"></ion-icon>
            <h1 class="text">  Crea un Articulo </h1>
        </div>
        <br>

        <div class="form-contain">

            <div class="row back">
                 <ion-icon  onclick="history.back()" class= "prymary-icon" name="arrow-back-outline"></ion-icon>
                <h2>Informacion del Articulo</h2>
            </div>
            <hr>
            <form action="/Articulos/app/controllers/ArticulosController.php" method="get">
                
                    <div class="campos">
                        <div class="campo">
                            <span> Marca</span>
                            <input type="text" name="marca" id="marca" required> 
                        </div>

                        <div class="campo">
                            <span> Precio venta</span>
                            <input type="number" name="precioventa" id="precioventa" required> 
                        </div>

                        <div class="campo">
                            <span> Precio compra</span>
                            <input type="number" name="preciocompa" id="preciocompa" required> 
                        </div>

                        <div class="campo">
                            <span> iva</span>
                            <input type="number" name="iva" id="iva" required> 
                        </div>

                        <div class="campo">
                            <span> Modelo</span>
                            <input type="text" name="modelo" id="modelo" required> 
                        </div>

                        <div class="campo">
                            <span> Proveedor</span>
                            <input type="text" name="proveedor" id="proveedor" required> 
                        </div>

                        <div class="campo">
                            <span> Tienda</span>
                            <input type="text" name="tienda" id="tienda" required> 
                        </div>

                        <div class="campo">
                            <span> Cantidad</span>
                            <input type="number" name="cantidad" id="cantidad" required> 
                        </div>

                        <div class="campo">
                            <span> Descripcion</span>
                            <input type="text" name="descripcion" id="descripcion" required> 
                        </div>

                        <div class="campo">
                            <span> Categoria</span>
                            <input type="text" name="categoria" id="categoria" required> 
                        </div>
        

                        <input type="hidden" name="action" value="store">
                        <!-- <p>Asegurate que las contraseñas sean iguales</p> -->
        
                    </div>


                
                    <div class="botons">
                        <input class="btn-dan" type="reset" value="Borrar formulario">
                        <input id="send-btn" class="btn-succ" type="submit"  value="Guardar Articulo">
                    </div>
            </form>

        </div>
        <span class='help' onclick="alert_sw()" href="#">¿Necesitas ayuna?</a>
        

    



        

  
    </section>
    

    <script src="../js/validateForm.js"></script>

    <script src="../../../utils/js/sidebar/SidebarScrtipt.js" type="module"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function alert_sw(){
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: '¿Necesitas ayuda?',
            text: "Asegurate de diligenciar todos los campos.",
            icon: 'warning',
            confirmButtonText: 'Ok',
            });
        }
    </script>
    
</body>

</html>