<?php

try {
    $results = Search::runSearch();
} catch (Exception $e) {
    Search::setError($e->getMessage());
}
if(Search::getError()){
    echo Search::getError();
    exit;
}
Debugger::debug(Timer::getTime(), 'Load time');
Debugger::debug($_POST);
$tpl = 'lookupResults';
$smarty->assign('results', $results);
$smarty->assign('post', $_POST);
$smarty->assign('author', $_POST['author']);
$smarty->assign('title', $_POST['title']);
$smarty->assign('isbn', $_POST['isbn']);
$smarty->assign('page', $_POST['itemPage']);
$smarty->assign('keywords', $_POST['keywords']);