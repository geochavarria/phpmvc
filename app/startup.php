<?php
    //Load Library
    require_once 'configs/config.php';
 
    spl_autoload_register(function($nameClass){
        require_once 'libraries/'.$nameClass.'.php';
    })
?>