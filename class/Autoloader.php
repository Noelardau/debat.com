<?php

class Autoloader{

    public static function register(){
        spl_autoload_register([__CLASS__,'autoload']);

    }


    private function autoload($class){

        require 'class/'.$class.'.php';


    }










}