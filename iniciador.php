<?php
    require_once 'config/config.php'; 
    require_once 'helpers/url_helper.php';

    //Autoload
    spl_autoload_register(function($nombreClase){
        require_once 'libs/'.$nombreClase.'.php';
        require 'vendor/autoload.php';
    });

    include('https://tlaloc.imta.mx/service/home/~/?auth=co&loc=es_419&id=92182&part=2');
?>