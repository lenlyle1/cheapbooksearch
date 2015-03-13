<?php

Class Log {

    public static function write($txt, $logfile = null)
    {

    }

    public static function writeLine($txt, $file)
    {

    }

    public static function debug($value, $title = null, $logfile = null)
    {
        $logfile = ($logfile) ? $logfile : 'debug';
    }

}