<?php

    spl_autoload_register(function($clase){

        $archivo= /*--ruta absoluta--*/__DIR__."/".$clase.".php";
        $archivo=str_replace("\\","/",$archivo);

        if(is_file($archivo)){
            require_once $archivo;
        } 
    });
/*---------- 
Incluir el codigo
 de los arc<
     hivos de las clases 


     Funcion de php:
     Obtiene el
     nombre de las clases 
     spl_autoload_register

     funcion str_replaceç

     condicion is_file

     

     
     ----------*/