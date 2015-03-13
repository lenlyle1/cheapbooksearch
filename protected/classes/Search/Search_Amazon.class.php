<?php

Class Search_Amazon extends Search{

    private static $searchItems = array();

    public static function lookupPrice($asin, $isbn, $author, $title)
    {
        if(!empty($asin)){
            Debugger::debug($asin, '$asin');
            $amazonEcs = self::getAmazonECS();
            $result = $amazonEcs->category('Books')->responseGroup('Small,Offers')->lookup($asin);
            //Debugger::debug($result);
            $count = 0;
            $priceArr = null;
            $link = null;
            if(is_array($result->Items->Item)){
                foreach($result->Items->Item as $item){
                    $tmpPriceArr = self::getPrice($item);
                    if(is_object($tmpPriceArr)){
                        if($count == 0){
                            $priceArr = $tmpPriceArr;
                            $link = self::getLink($item);
                            $stock = self::getStock($item);
                        } else if($tmpPriceArr->Amount < $priceArr->Amount){
                            $priceArr = $tmpPriceArr;
                            $link = self::getLink($item);
                            $stock = self::getStock($item);
                        }
                    }

                    $count++;
                }
            } else {
                Debugger::debug('single sku');
                if(isset($result->Items->Item)){
                    $priceArr = self::getPrice($result->Items->Item);
                    $link = self::getLink($result->Items->Item);
                    $stock = self::getStock($result->Items->Item);
                }
            }
            if(!empty($priceArr)){
                Search::renderPriceResult($priceArr->FormattedPrice, "Amazon", $link, $stock);
            } else {
                Search::renderPriceResult(null, "Amazon", null, 0);
            }
        } else {
            Search::setError("ISBN missing");
        }
    }

    private static function getStock($item){
        if(isset($item->OfferSummary)){
            return $item->OfferSummary->TotalNew + $item->OfferSummary->TotalUsed;
        }
    }

    private static function getLink($item)
    {
        return $item->DetailPageURL;
    }

    private static function getPrice($item)
    {
        //Debugger::debug($item, 'BOOK');
        if(isset($item->OfferSummary->LowestNewPrice)){
            return $item->OfferSummary->LowestNewPrice;
        }
    }

    public static function search()
    {
        $blank = true;

        $itemPage = 1;

        if(isset($_POST['itemPage'])){
            $itemPage = $_POST['itemPage'];
        }
        Session::set('searchPage', $itemPage);
        try
        {
            $amazonEcs = self::getAmazonECS();
            if(!empty($_POST['isbn'])){
                $blank = false;
                //$response = self::addToSearch('isbn', $_POST['isbn']);
                $response = $amazonEcs->category('Books')->responseGroup('Large,ItemAttributes,Images')->lookup($_POST['isbn']);
            } else {
                if( !empty($_POST['author']) || !empty($_POST['title']) || !empty($_POST['keywords']) ){
                    $blank = false;
                }
                self::addToSearch('author', ((isset($_POST['author']) ? $_POST['author'] : '')));
                self::addToSearch('title', ((isset($_POST['title']) ? $_POST['title'] : '')));
                self::addToSearch('keywords', ((isset($_POST['keywords']) ? $_POST['keywords'] : '')));
                self::addToSearch('itemPage', $itemPage);
                if(!$blank){
                    $response = $amazonEcs->category('Books')->responseGroup('Large,ItemAttributes,Images')->search(self::$searchItems);
                } else {
                    return false;
                }
            }
                //Debugger::debug(self::$searchItems);

                //Debugger::debug($response, '$response');
            // if single result, convert to single item array
            if(!empty($response->Items->Item)){
                if(!is_array($response->Items->Item)){
                    $book = $response->Items->Item;
                    $response->Items->Item = array();
                    $response->Items->Item[] = $book;
                }

                foreach($response->Items->Item as $book){

                }
            }

            return $response;
        }
        catch(Exception $e)
        {
            Debugger::debug($e->getMessage());
        }
    }

    private static function addToSearch($name, $value)
    {
        self::$searchItems[$name] = $value;
    }

    protected static function getAmazonECS()
    {
        $amazonEcs = new AmazonECS(
            AWS_API_KEY,
            AWS_API_SECRET_KEY,
            Session::get('country')->amazon_country,
            AWS_ASSOCIATE_TAG
        );

        return $amazonEcs;
    }
}