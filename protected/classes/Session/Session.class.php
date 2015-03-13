<?php

Class Session {

    public static function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function get($name)
    {
        return (isset($_SESSION[$name])) ? $_SESSION[$name] : null;
    }

    public static function wipe($name)
    {
        unset($_SESSSION[$name]);
    }
    public static function wipeAll()
    {
        unset($_SESSION);
    }
}