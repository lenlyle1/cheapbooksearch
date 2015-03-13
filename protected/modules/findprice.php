<?php
try{
    Debugger::debug('searching: ');
    $class = 'Search_' . $_POST['vendor'];
    $price = $class::lookupPrice($_POST['asin'], $_POST['isbn'], $_POST['author'], $_POST['title'] );

    $tpl = 'priceRow';
} catch (Exception $e) {
    Search::setError($e->getMessage());
}
