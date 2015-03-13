<?php

Class Search_Powells extends Search{

    private static $partnerId = "43940";

    public static function lookupPrice($asin, $isbn, $author, $title)
    {
        $results = file_get_contents('http://www.powells.com/search/linksearch?isbn=' . $isbn);

        $results = self::parseResults($results);

        $link =  urlencode("http://www.powells.com/biblio/" . $isbn . "?p_isbn&PID=" . self::$partnerId);

        //Debugger::debug($results);
        if($results['count'] > 0){
            self::renderPriceResult("$" . $results['best']['Price'], "Powells", $link, $results['count']);
        } else {
            self::renderPriceResult(null, "Powells", null, 0);
        }
    }

    private static function parseResults($results)
    {
        $results = explode("\n\n", $results);

        $topResult = array();
        $resultCount = 0;

        foreach($results as $k => $result){

            $tmpResult = array();

            $lines = explode("\n", $result);
            foreach($lines as $line){
                $bits = explode(": ", $line);
                if(!empty($bits[1])){
                    $tmpResult[$bits[0]] = $bits[1];
                }
            }

            //Debugger::debug($tmpResult, '$tmpResult');

            if(empty($bestPrice) && !empty($tmpResult['Price'])){
                $resultCount++;
                $bestPrice = $tmpResult['Price'];
                Debugger::debug('FIRST RESULT');
                $topResult = $tmpResult;
                //Debugger::debug($topResult, '$topResult');
            } else if(!empty($tmpResult['Price'])){
                $resultCount++;
                if($tmpResult['Price'] < $bestPrice){
                    $bestPrice = $tmpResult['Price'];
                    //Debugger::debug('BEST RESULT');
                    $topResult = $tmpResult;
                    //Debugger::debug($topResult, '$topResult');
                }
            }
        }

        //Debugger::debug($topResult, '$topResult');
        $result = array(
            "best" => $topResult,
            "count" => $resultCount
        );

        return($result);
    }
}