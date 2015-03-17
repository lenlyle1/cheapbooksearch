<?php

function smarty_function_translate($params, $template)
{
	// get translations for country

	//Debugger::debug($params, '$params for translate');
	$dictionary = Translate::getDictionary();
	//Debugger::debug($dictionary, '$dictionary for translate');

	if(!isset($dictionary[$params['key']])){
		if(IS_LIVE){
			echo $params['default'];
		} else {
			echo '<span class="noTrans" name="' . $params['key'] . '"">' . $params['default'] . '</span>';
		}
	} else {
		echo $dictionary[$params['key']];
	}
}