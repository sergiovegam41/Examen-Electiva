<?php
require_once  "C:/UwAmp/www/Articulos/lib/php-activerecord/ActiveRecord.php";
require_once 'C:/UwAmp/www/Articulos/lib/config.php';

class Articulo extends ActiveRecord\Model {
    public static $table_name = "articulos";
}

