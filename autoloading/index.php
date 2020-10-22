<?php 

declare(strict_types = 1);

    function __autoload($class){
        try{
            if(file_exists($class.'.php') && is_readable($class.'.php'))
                require $class.'.php';
        }catch(\Exception $ex){
            echo "class could not be loaded!" . $ex->getMessage();
        }

        try{
            $t = new Test();
            $p = new Plan();
        }catch(\Exception $cex){
            echo "class not found or loaded !";
        }
    }

