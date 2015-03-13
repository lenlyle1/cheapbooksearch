<?php
if(Session::get('country')->code_3 == 'usa'){
    define('AWS_API_KEY', 'AKIAI32YKGXV6B6NKDQQ');
    define('AWS_API_SECRET_KEY', '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');
    define('AWS_ASSOCIATE_TAG', 'cheboosea0d-20');
} else if(Session::get('country')->code_3 == 'gbr'){
    define('AWS_API_KEY', 'AKIAIHKWWR36VXC3ZMQQ');
    define('AWS_API_SECRET_KEY', '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');
    define('AWS_ASSOCIATE_TAG', 'cheboosea-21');
}
require 'AmazonECS.class.php';

class Search {

    public static $error;

    public static function runSearch()
    {
        global $template;

        if(empty($_POST['isbn'])){
            $_POST['isbn'] = "";
        }
        if(empty($_POST['keywords'])){
            $_POST['keywords'] = "";
        }
        if(empty($_POST['itemPage'])){
            $_POST['itemPage'] = "1";
        }
        $response = Search_Amazon::search();

        if(!empty($response)){
            //Debugger::debug($response);
            $results = array();
            if(!empty($response->Items->TotalResults)){
                $results['totalResults'] = $response->Items->TotalResults;
            }
            if(!empty($response->Items->TotalPages)){
                $results['totalPages'] = $response->Items->TotalPages;
            }
            if(isset($response->Items->Request->Errors->Error)){
                die($response->Items->Request->Errors->Error->Message);
                exit;
            } else {
                if(is_array($response->Items->Item)){
                    foreach($response->Items->Item as $item){
                        //Debugger::debug($item->ItemAttributes->Title, '$item->ItemAttributes->Title');
                        $results['items'][] = $item;
                    }
                } else {
                    $results['items'] = $response->Items->Item;
                }
                try{
                    self::saveSearch($_POST['author'], $_POST['title'], $_POST['isbn'], $_POST['keywords']);
                } catch (exception $e){
                    Debugger::debug($e->getMessage());
                }
                return $results;
            }
        } else {
            self::setError('<span class="error">No search items entered.<br /><br />Please enter a search term and try again.</span>');
        }
    }

    protected static function renderPriceResult($price, $vendor, $link, $stock)
    {
        global $smarty;

        $price = Currency::format($price, 'USD');
        $smarty->assign("price", $price);
        $smarty->assign("vendor", $vendor);
        $smarty->assign("link", $link);
        $smarty->assign("stock", $stock);
    }

    protected static function saveSearch($author, $title, $isbn, $keywords)
    {
        global $db;

        $sql = "INSERT INTO searches
                (`author`, `title`, `isbn`, `keywords`, `page`, `ip`, `ts`)
                VALUES
                (?, ?, ?, ?, ?, ?, ?);";

        $stmt = $db->prepare($sql);
        $stmt->execute(array($author, $title, $isbn, $keywords, Session::get('searchPage'), $_SERVER['REMOTE_ADDR'], time()));
        Debugger::debug($stmt->queryString);
        return;
    }

    protected static function getAll()
    {
    }

    public static function ajaxError($error)
    {
        $response = array('error' => $error);
        echo json_encode($response);
        exit;
    }

    public static function setError($error)
    {
        Debugger::debug($error);
        self::$error = $error;
    }

    public static function getError(){
        return self::$error;
    }
}
