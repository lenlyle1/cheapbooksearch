<?php


/**
* Debugging class - writes to log in live environment
* logging turn offable in config to stop large log files on live server
*
* Author: Len Lyle
*
* Update: 27/6/12 - Added timer to debugs
*/
Class Debugger
{
    private static $debugItems = array();

    private static $writeToLog = true;

    private static $newline = "\n";

    private static $logPath = "/www/logs/";

    private static $logfile = "debuglog";

    private static $dirSplitter = "/";


    public function setlogPath($path)
    {
        self::$logPath = $path;
    }

    public static function getItems()
    {
        return self::$debugItems;
    }

    public static function debug($data = null, $name = '', $logfile = null)
    {
        // check the log path exists - make this recursive
        if(IS_LIVE){
            return;
        }
        if(!is_dir(self::$logPath)){
            mkdir(self::$logPath);
        }

        // backtrace to source file.
        $backtraceData = debug_backtrace();
        $file = $backtraceData[0]['file'];
        $line = $backtraceData[0]['line'];
        if(!isset(self::$logfile)){
            $filebits = explode(self::$dirSplitter, $file);
            self::$logfile = array_pop($filebits);
        }
        if(self::$writeToLog){
            // parse the backtrace
            $backtrace = trim(self::parse_backtrace($backtraceData));

            if (is_array($data) || is_object($data)) {
                $logdata = self::obsafe_print_r($data, TRUE);
            } else {
                $logdata = $data;
            }
            $logmessage = $name . " - File:" . $file . " - Line:" . $line .
                          self::$newline .
                          $logdata .
                       //   self::$newline .
                       //   self::$newline .
                       //   "Backtrace: " . $backtrace .
                          self::$newline .
                          self::$newline;
            self::errorlog(self::$logPath . self::$logfile, $logmessage);
        }
        // add the debug to debugItems;
        self::$debugItems[] = array("file" => $file,
                                    "line" => $line,
                                    "name" => $name,
                                    "data" => print_r($data, true),
                                    "backtrace" => $backtrace);


    }

    static public function getDebugItems()
    {
        return self::$debugItems;
    }

    private static function errorlog($file, $message)
    {
        global $isLive;

        if(!$isLive){
            error_log($message, 3, $file . ".log");
        }
    }

    private static function parse_backtrace($raw)
    {
        unset($raw[0]); // take debug class out of the back trace
        $output = "";
        foreach($raw as $entry){
                $output .= "File: " . (isset($entry['file']) ? $entry['file'] : "") ." (Line: " . (isset($entry['line']) ? $entry['line'] : "") . ")\n";
                $output .= "Function: " . (isset($entry['function']) ? $entry['function'] : "") . "()\n";
        }

        return $output;

    }

    private function obsafe_print_r($var, $return = false, $html = false, $level = 0) {

        $spaces = "";
        $space = $html ? "&nbsp;" : " ";

        for ($i = 1; $i <= 6; $i++) {
            $spaces .= $space;
        }
        $tabs = $spaces;
        for ($i = 1; $i <= $level; $i++) {
            $tabs .= $spaces;
        }

        if (is_array($var)) {
            $title = "Array";
        } elseif (is_object($var)) {
            $title = get_class($var)." Object";
        }

        $output = $title . self::$newline . self::$newline;
        foreach($var as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $level++;
                $value = self::obsafe_print_r($value, true, $html, $level);
                $level--;
            }
            $output .= $tabs . "[" . $key . "] => " . $value . self::$newline;
        }
        if ($return) {
            return $output;
        }else{
            echo $output;
        }

    }
}
?>
