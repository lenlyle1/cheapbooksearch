<?php

Class Translate {

	public static $forceRun = false;

	public static function getDictionary()
	{
		global $db;

		if(!Session::get('dictionary') || self::$forceRun){
			Debugger::debug('loading dictionary');
			$sql = "SELECT * FROM translations 
					WHERE language = ?";
	        $stmt = $db->prepare($sql);
	        $stmt->execute(array(Session::get('country')->code_3));

	        $dictionary = $stmt->fetchAll(PDO::FETCH_CLASS);

	        foreach($dictionary as $key => $translation){
	        	//Debugger::debug($translation);
	        	$dictionary[$translation->key] = $translation->text;
	        	unset($dictionary[$key]);
	        }

			Session::set('dictionary', $dictionary);
		}
		return Session::get('dictionary');
	}
}