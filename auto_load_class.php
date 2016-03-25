<?php 
/**
 * This is a file for auto load  class
 * Date:2016/3/20
 * Author:lxw
 */
class Autoload{
    static function load($file){
        $file_path = LIBS.$file.".class.php";
        if(file_exists($file_path)){
            require $file_path;
        }
    }
}


//register class
spl_autoload_register(array("Autoload","load"));