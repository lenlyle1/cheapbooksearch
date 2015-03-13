<?php

// API key 1f8ece82db4ec4d6d37935e01d7039e0:2:71486363

Class NYT {

    private static $apiKey = "1f8ece82db4ec4d6d37935e01d7039e0:2:71486363";

    public static function getBestsellers()
    {
        $date = date('Y-m-d',time());
        $url = "api.nytimes.com/svc/books/v2/lists/" . $date .
               "/trade-fiction-paperback.json?api-key=" . self::$apiKey;

        $data = Curl::get($url);
        
        return $data;
    }
}

//stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
//file_get_contents("http://www.something.com/somepage.html",false,$context);