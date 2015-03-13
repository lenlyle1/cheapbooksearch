<?php
/**
 * Bootstrap file
 */
date_default_timezone_set('UTC');

define("SITE_ROOT", realpath('../'));
define("MODULE_PATH", realpath(SITE_ROOT . "/protected/modules/"));

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/protected/"));

session_start();

require_once "autoloader.php";
//die(SITE_ROOT);
$smarty = new Smarty();


$smarty->setTemplateDir(SITE_ROOT . '/protected/templates/');
$smarty->setCompileDir(SITE_ROOT . '/protected/templates/templates_c/');
$smarty->setConfigDir(SITE_ROOT . '/protected/templates/configs/');
$smarty->setCacheDir(SITE_ROOT . '/protected/templates/cache/');

if($_SERVER['SERVER_NAME'] == "cheapbooksearch"){
    define("IS_LIVE", false);
    $dbHost = "localhost";
} else {
    define("IS_LIVE", true);
    $dbHost = "cheapbooksearch.db";
}
try{
    $db = new PDO('mysql:host=' . $dbHost . ';dbname=cheapbooksearch;charset=utf8', 'lenlyle', 'Scr0tums');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
} catch(Exception $e){
    die('There has been a serious error');
}

$allowedModules = array(
    "index",
    "search",
    "findprice",
    "redirect",
    "blog",
    "about"
);

$countries = Country::loadCountries();

Debugger::debug($countries);
