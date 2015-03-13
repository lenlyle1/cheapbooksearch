<?php
// Load the bootstrap
include_once '../protected/bootstrap.php';
// start page load timer
Timer::start();
//session_destroy();
try{
    Debugger::debug($_GET);

    $tpl = 'main';

    Country::setCountry();
    Debugger::debug(Session::get('country'));
    //Country_Importer::run();
    $smarty->assign('country', Session::get('country'));
    $smarty->assign('countries', Session::get('countries'));

    if(!empty($_GET['module'])){
        $module = $_GET['module'];
        Debugger::debug('modules/' . $module . '.php');
        if(!in_array($_GET['module'], $allowedModules)){
            $module = "index";
        }
        include_once 'modules/' . $module . '.php';
    } else {
        try {
            $vendors = Vendor::loadVendors(Session::get('country')->code_3);
         } catch(PDOException $ex) {
            Debugger::debug('PDO error: ' . $ex->getMessage());
         }
        //load vendors
        $vendors = Vendor::loadVendors();

        // get nyt bestsellers
        $bestsellers = json_decode(NYT::getBestsellers());
        shuffle($bestsellers->results);
        $smarty->assign("bestsellers", $bestsellers->results);

        Debugger::debug($vendors, '$vendors');
        $title = 'Cheap Book Search';
        //echo 'output template';
        $smarty->assign('pagetitle', $title);
        $smarty->assign('vendors', $vendors);
        Debugger::debug(Timer::getTime(), 'Load time');
        $smarty->assign('debugItems', Debugger::getDebugItems());
    }
    Debugger::debug(Timer::getTime(), 'Load time');

    $smarty->display($tpl . '.tpl');
} catch (Exception $e){
    die('Uhoh... ' . $e->getMessage());
}

