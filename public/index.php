<?php

/* Carga todo lo necesario desde la carpeta vendor. 
 * Se utiliza __DIR__  para que la ruta sea absoluta */
require __DIR__ . '/../vendor/autoload.php';


/* Para ver una ruta, se ejecuta el siguiente comando */
// var_dump(__DIR__ . '/../vendor/autoload.php');


/* Luego de cargar el vendos, se accede a request y se ejecute el método enviar. */
$request = new App\Http\Request;
$request->send();
