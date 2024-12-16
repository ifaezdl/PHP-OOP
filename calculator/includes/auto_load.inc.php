<?php
spl_autoload_register('MyAotoLoader');

function MyAotoLoader($className){
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'includes')!==false){
        $path='../classes/';
    }
    else{
        $path='classes/';
    }
    $extention='.class.php';
include_once $path . $className . $extention;

}


?>