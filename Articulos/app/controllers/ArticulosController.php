<?php
session_start();
require_once 'C:/UwAmp/www/Articulos/app/models/Articulo.php';

if(@$_REQUEST['action'] == 'filter'){
    ArticulosController::filter( @$_REQUEST['filter'] );
}

if(@$_REQUEST['action'] == 'store'){
    ArticulosController::store();
}

if(@$_REQUEST['action'] == 'update'){
    ArticulosController::update( @$_REQUEST['id'] );
}

if(@$_REQUEST['action'] == 'delete'){
    ArticulosController::delete( @$_REQUEST['id'] );
}

class ArticulosController {

    public static function index(){
      $Articulos = Articulo::all();
      $_SESSION['Articulos'] = $Articulos;
    }

    public static function store(){ 

        try {

            $Articulos = new Articulo();
            $Articulos->marca =  $_REQUEST['marca'];
            $Articulos->precioventa =  $_REQUEST['precioventa'];
            $Articulos->preciocompa =  $_REQUEST['preciocompa'];
            $Articulos->iva =  $_REQUEST['iva'];
            $Articulos->modelo =  $_REQUEST['modelo'];
            $Articulos->proveedor =  $_REQUEST['proveedor'];
            $Articulos->tienda =  $_REQUEST['tienda'];
            $Articulos->cantidad =  $_REQUEST['cantidad'];
            $Articulos->descripcion =  $_REQUEST['descripcion'];
            $Articulos->categoria =  $_REQUEST['categoria'];
            $Articulos->save();

            $_SESSION['last_message'] = "El Articulo se guardo correctamente.";

            header('Location: /Articulos/web/cruds/Articulos/');

            return true;      

        } catch (\Throwable $th) {

            $_SESSION['last_message'] = "Ups! Algo salio mal. Error: ".$th;

            header('Location: /Articulos/web/cruds/Articulos/');

            return false;     

        }


          
    }

    
    
    public static function update($id){
        try {

            $Articulos = Articulo::find($id);

            $Articulos->marca =  @$_REQUEST['marca'];
            $Articulos->precioventa =  @$_REQUEST['precioventa'];
            $Articulos->preciocompa =  @$_REQUEST['preciocompa'];
            $Articulos->iva =  @$_REQUEST['iva'];
            $Articulos->modelo =  @$_REQUEST['modelo'];
            $Articulos->proveedor =  @$_REQUEST['proveedor'];
            $Articulos->tienda =  @$_REQUEST['tienda'];
            $Articulos->cantidad =  @$_REQUEST['cantidad'];
            $Articulos->descripcion =  @$_REQUEST['descripcion'];
            $Articulos->categoria =  @$_REQUEST['categoria'];

            $Articulos->save();

            $_SESSION['last_message'] = "El usuario se Actualizo correctamente.";

            header('Location: /Articulos/web/cruds/Articulos/');

            return true;  
            
        } catch (\Throwable $th) {

            $_SESSION['last_message'] = "Ups! Algo salio mal. Error: ".$th;

            header('Location: /Articulos/resourses/cruds/Articulos/');

            return false;     

        }      
    }

    public static function find($id){

        try {

            $Articulos = Articulo::find($id);
            
            $_SESSION['Articulo'] = $Articulos;

            return $Articulos;

        } catch (\Throwable $th) {

            $_SESSION['last_message'] = "Ups! Algo salio mal. Error: ".$th;

            header('Location: /Articulos/web/cruds/Articulos/');

            return false;     

        }

    }

    public static function filter($filter){

        $filter = @trim($filter);
        try {

            $_SESSION['Articulos'] = null;
            if(@$_REQUEST['filter_type']){
                $Articulos = Articulo::find('all',array('conditions' => array(@$_REQUEST['filter_type'].'=?',$filter)));
            }else{
                $Articulos = Articulo::find('all',array('conditions' => array('identification_number=?',$filter)));
            }

            $_SESSION['Articulos'] = $Articulos;

            if( @$_SESSION['Articulos'][0]->id ){


                header('Location: /Articulos/web/cruds/Articulos/form/view.php?id='.$_SESSION['Articulos'][0]->id);
            }else{
                $_SESSION['last_message'] = "No se encontro un Articulo cuyo ".$_REQUEST['filter_type']." sea igual a: ".$filter;

                header('Location: /Articulos/web/cruds/Articulos/');

            }
           

            return $Articulos;

        } catch (\Throwable $th) {

            $_SESSION['last_message'] = "Ups! Algo salio mal. Error: ".$th;

            header('Location: /Articulos/web/cruds/Articulos/');

            return false;     

        }

    }

    public static function delete($id){


        try {

            $Articulos = Articulo::find($id);
            $Articulos->delete();

            $_SESSION['last_message'] = "El Articulo se elimino correctamente.";

            header('Location: /Articulos/web/cruds/Articulos/');

        } catch (\Throwable $th) {

            $_SESSION['last_message'] = "Ups! Algo salio mal. Error: ".$th;

            header('Location: /Articulos/web/cruds/Articulos/');

            return false;     

        }

    }



}