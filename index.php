<?php

    require_once "./config/app.php";
    require_once "./autoload.php";
 /*---------- Iniciando sesion ----------*/
 require_once "./app/views/inc/session_start.php";

 if(isset($_GET['views'])){
     $url=explode("/", $_GET['views']);
 }else{
     $url=["login"];
 }



/*---------- Plantilla base
obtener la varieble tipo get views
condidisonal doble 
Funcion explode () partir un string 
----------*/

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>