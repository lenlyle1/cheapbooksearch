<?php
spl_autoload_register(function ($class) {
        //echo ($class);
    //echo  substr_count($class, "_");
    if(strstr($class, "_") && substr_count($class, "_") == 1){
        //echo ($class);
        $classBits = split("_", $class);
        if(file_exists(SITE_ROOT . '/protected/classes/' . $classBits[0] . '/' . $class . '.class.php')){
            include SITE_ROOT . '/protected/classes/' . $classBits[0] . '/' . $class . '.class.php';
        } else {
            Die($class);
        }
    }else if(file_exists(SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php')){
        include SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php';
    }
    //die(SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php');
});
