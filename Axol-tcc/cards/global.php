<?php
    spl_autoload_register('carregarClasses');

    function carregarClasses($class){
        if(file_exists('model;'.$class.'.php')){
            require_once 'model/'.$class.'.php';
        }
    }
?>