<?php
$vendors = Vendor::loadVendors();
$bestsellers = json_decode(NYT::getBestsellers());
//$bestsellers = NYT::getBestsellers();
//Debugger::debug();
$tpl = 'main';

$smarty->assign("bestsellers", $bestsellers->results);
Debugger::debug($vendors, '$vendors');

Debugger::debug(Timer::getTime(), 'Load time');

