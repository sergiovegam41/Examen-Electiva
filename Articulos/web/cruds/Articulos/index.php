<?php

    require_once 'C:/UwAmp/www/Articulos/app/controllers/ArticulosController.php';
    ArticulosController::index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Home</title> 
    <link rel="stylesheet" href="../../utils/css/all.css">
    <!-- <link rel="stylesheet" href="./css/usuarios.css"> -->
    <link rel="stylesheet" href="../../utils/css/cruds/crud.css">

</head>
<body>
    


    <section class="home">

 
        <div class="row">
            <ion-icon  class= "prymary-icon" name="person-circle-outline"></ion-icon>
            <h1 class="text">  Articulos </h1>
        </div>
        <br>

        <?php
            
            if( @$_SESSION['last_message'] ){
                echo  '

                    <div class="mesaje">
                    <ion-icon class="icon-info" name="information-circle-outline"></ion-icon>
                    <p>'.$_SESSION['last_message'].'</p>
                    </div>
                
                ';
                $_SESSION['last_message'] = null;
            }
            
        ?>
 

        <div class="actions">

                <div  onclick="window.location.href = './form/create.php'" class="buttom add" style="background: #00a65a; "> 
                    <ion-icon name="add-circle-outline"></ion-icon>
                     <a >Añadir</a>
                </div>

                <form action="/Articulos/app/controllers/ArticulosController.php" method="get">
                    <li class="filter">
                    <ion-icon class ='icon' name="search-outline"></ion-icon>

                        <select name="filter_type" id="filter_type">
                            <option value="id">ID</option>
                            <option value="marca">Marca</option>
                            <option value="precioventa">Precio venta</option>
                            <option value="preciocompa">Precio compra</option>
                            <option value="iva">iva</option>
                            <option value="modelo">Modelo</option>
                            <option value="proveedor">Proveedor</option>
                            <option value="tienda">Tienda</option>
                            <option value="cantidad">Cantidad</option>
                            <option value="descripcion">Descripcion</option>
                            <option value="categoria">Categoria</option>
                        </select>

                        <input type="text" placeholder="Search" id="filter" name="filter">
                        <input type="hidden" name="action" value="filter">

                    </li>
                </form>


        </div>


        

        <table class="table scroll-box" >
           

                <tr class='cols scroll-box'>
                    <td class="col" class="scroll-box" > # </td>
                    <td class="col" class="scroll-box" > Marca </td>
                    <td class="col" class="scroll-box" > Precio venta </td>
                    <td class="col" class="scroll-box" > Precio compra </td>
                    <td class="col" class="scroll-box" > iva </td>
                    <td class="col" class="scroll-box" > Modelo </td>
                    <td class="col" class="scroll-box" > Proveedor </td>
                    <td class="col" class="scroll-box" > Tienda </td>
                    <td class="col" class="scroll-box" > Cantidad </td>
                    <td class="col" class="scroll-box" > Descripcion </td>
                    <td class="col" class="scroll-box" > categoria </td>
                </tr>



                <?php
              
                    foreach ( $_SESSION['Articulos'] as $item ){
                        
                        echo ' <tr>
                                    <td scope="row">  '.@$item->id.'</td>
                                    <td class="scroll-box"> '.@$item->marca.' </td>
                                    <td class="scroll-box"> '.@$item->precioventa.'</td>
                                    <td class="scroll-box"> '.@$item->preciocompa.' </td>
                                    <td class="scroll-box"> '.@$item->iva.' </td>
                                    <td class="scroll-box"> '.@$item->modelo.' </td>
                                    <td class="scroll-box"> '.@$item->proveedor.' </td>
                                    <td class="scroll-box"> '.@$item->tienda.' </td>
                                    <td class="scroll-box"> '.@$item->cantidad.' </td>
                                    <td class="scroll-box"> '.@$item->descripcion.' </td>
                                    <td class="scroll-box"> '.@$item->categoria.' </td>
                
                                    <td class="scroll-box row-ations"> 
                                    
                                        <a href="#" onclick="window.location.href = `form/edit.php?id='.@$item->id.'` " >
                                            <ion-icon name="create-outline" ></ion-icon>
                                        </a>
                                        
                                        <a href="#" onclick="window.location.href = `form/view.php?id='.@$item->id.'` " >
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>

                                        
                    
                                        <a href="#" onclick="deleteById('.$item->id.')">
                                                <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    
                                    </td>
                            </tr>';
                    }

                ?>

                    

        </table>
  
    </section>


    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function deleteById(id){
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: '¿Estas seguro?',
            text: "Esta accion no se puede deshacer",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'No, conservar',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {

                window.location.href = "http://localhost/Articulos/app/controllers/ArticulosController.php?action=delete&id="+id;

            
              
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelado',
                'Tu registro esta seguro :)',
                'error'
                )
            }
            })
        }
    </script>
    
</body>

</html>