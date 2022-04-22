<?php

date_default_timezone_set('America/Bogota');

require_once  "C:/UwAmp/www/Articulos/lib/php-activerecord/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('C:/UwAmp/www/Articulos/app/models/');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:root@localhost:3306/examen_electiva',
       'test' => 'mysql://root:root@localhost:3306/examen_electiva',
       'production' => 'mysql://root:root@localhost:3306/examen_electiva'
     )
   );
});