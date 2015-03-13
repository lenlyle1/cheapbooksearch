<?php

Class Timer {

    private static $timers = array();
    
    public static function start($name = '')
    {
        self::$timers[$name]['start'] = microtime(true);
    }

    public static function stop($name = '')
    {
        self::$timers[$name]['stop'] = microtime(true);
    }

    public static function getTime($name = '')
    {
        if(!isset(self::$timers[$name]['stop'])){
            self::stop($name);
        }
        return self::$timers[$name]['stop'] - self::$timers[$name]['start'];
    }
}
