<?php

Class Currency{

    public static function format($amount, $currency)
    {
        $fmt = new NumberFormatter( Session::get('country')->locale, NumberFormatter::CURRENCY );
        Debugger::debug($amount, 'AMOUNT before');
        $amount = preg_replace('/[^0-9\.]/', '', $amount);
        Debugger::debug($amount, 'AMOUNT pregged');
        settype($amount, 'float');
        Debugger::debug($amount, 'AMOUNT after');
        return $fmt->formatCurrency($amount, Session::get('country')->currency);
    }
}
