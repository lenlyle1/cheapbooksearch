<?php


Class Search_Abebooks extends Search{

    private static $apiKey = '849539d4-a383-4473-a3f3-15fde5711d38';

    public static function lookupPrice($asin, $isbn, $author, $title)
    {
        $url = 'http://search2.abebooks.com/search?isbn=' . $isbn . '&clientkey=' . self::$apiKey . '&vendorlocation=' . Session::get('country')->code_3;

        $data = Curl::get($url);

        $results = self::parseResults($data);
        //print_r($data);
        Debugger::debug($results, 'ABE results');


        if($results['count'] > 0){
            self::renderPriceResult("$" . $results['best']['listingPrice'], "Abebooks", self::getUrl($isbn), $results['count']);
        } else {
            self::renderPriceResult(null, "Abebooks", null, 0);
        }
    }

    private static function parseResults($data)
    {
        $parser = xml_parser_create();
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parse_into_struct($parser, $data, $values, $tags);
        xml_parser_free($parser);

        Debugger::debug(count($values), 'COUNT');
        $start = false;
        $bestBook = array();
        $count = 0;
        foreach($values as $k => $v){
            //print_r($v);
            if($v['tag'] == 'resultCount'){
                //Debugger::debug($v);
                $count = $v['value'];
            } else if($v['tag'] == 'Book'){
                if(!$start){
                    $start = true;
                    continue;
                } else {
                    break;
                }
            }
            if($start){
                $bestBook[$v['tag']] = $v['value'];
            }
        }
        Debugger::debug($bestBook, '$bestBook');
        $result = array(
            "best" => $bestBook,
            "count" => $count
        );

        return $result;
    }

    private static function getUrl($isbn)
    {
        $location = Session::get('country')->code_3;

        $url = 'http://www.abebooks.' . Session::get('country')->amazon_country . '/servlet/SearchResults?isbn=' . $isbn . '&vendorlocation=' . $location;

        $redirectUrl = 'http://affiliates.abebooks.com/c/139964/77798/2029?u=' . urlencode($url);

        return $url;
    }
}
