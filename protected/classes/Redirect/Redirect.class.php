<?php

Class Redirect{

    public static function handle($url)
    {
        Debugger::debug('Redirecting to: ' . $url, 'REDIRECT');
        try{
            self::saveRedirect($url);}
        catch (exception $e){
            echo $e->getMessage();
        }

        self::sendTo($url);
    }

    private static function saveRedirect($url)
    {
        global $db;

        $sql =  "INSERT INTO redirects
                (url, search_id, ts)
                VALUES
                (?, ?, ?)";
        $searchId = 1;
        $stmt = $db->prepare($sql);
        $stmt->execute(array($url, $searchId, time()));
        Debugger::debug($stmt->queryString);
        return;

    }

    private static function sendTo($url)
    {
        header("Location: " . $url);
        exit;
    }
}