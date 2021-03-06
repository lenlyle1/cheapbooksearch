<?php

Class Country{

    private static $default = 'usa';

    public static function loadCountries()
    {
        global $db;

        $sql = "SELECT name, code_2, code_3, locale, currency, amazon_country, language FROM countries WHERE active = 1";
        $stmt = $db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public static function setCountry()
    {
        Debugger::debug('setCountry');
        if(!Session::get('countries')){
            Debugger::debug('no countries in session');
            Session::set('countries', self::loadCountries());
        }
        if(empty($_GET['country'])){
            Debugger::debug('no country in get');
            self::setDefault();
        } else if(!Session::get('country')){
            Debugger::debug('setting country');
            self::get($_GET['country']);
        } else if(Session::get('country')->code_3 != $_GET['country']){
            Debugger::debug('country changed');
            self::get($_GET['country']);
        }
    }

    public static function get($siteCountry = null)
    {
        $country = null;

        if(!$siteCountry){
            Debugger::debug('no country in url, default to usa');
            $siteCountry = self::$default;
        }
        if(!Session::get('country') || Session::get('country')->code_3 != $siteCountry){
            Debugger::debug('session does not match, change');
            foreach(Session::get('countries') as $country){
                if($siteCountry == $country->code_3){
                    Session::set('country', $country);
                    Session::set('countryCode', $siteCountry);
                    break;
                }
            }
        }
    }

    private static function setDefault()
    {
        self::get();
        Redirect::handle('/' . self::$default . '/');
    }

    private static function isValid($country)
    {
        $countryValid = false;
        foreach(Session::get('countries') as $allowedCountry){
            if($allowedCountry['code_3'] == $country){
                $countryValid = true;
                break;
            }
        }
        return $countryValid;
    }
}