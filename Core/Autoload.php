<?php

class Autoload
{

    public static function autoloader($class)
    {
        $class = str_replace("\\", "/", $class);
        require ROOT . "/$class.php";
    }

    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoloader'));
    }
}
