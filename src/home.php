<?php

//require dirname(__FILE__).'/validateForm.php'

var_dump($_REQUEST);

$vf = new validateForm();

switch $_REQUEST('apiAction') {
	case 'live':	
	   $isFormValid = $vf->validateLiveApi;
	   var_dump($isFormValid);
	   break;
    case 'convert':
    case 'historical':
    case 'timeframe':
    case 'change':
    default:
        break;
}


/*

public function __construct() 
{



echo 'hello world';	
die(__FILE__);
	
   if (isset($_REQUEST['request'])) {
 	$currObj = new currency($_REQUEST);
	
	$currencyUrl = 'http://apilayer.net/api/' . $currObj->getApiRequestType() . '?access_key=' . $currObj->getAccessKey(); 
 
	$currencyConversion = json_decode(file_get_contents($currencyUrl));

	var_dump($currencyConversion);

	
    	switch($_REQUEST['apiAction']) {
           case 'convert':
	    	break;
            case 'live':
            case 'historical':
            case 'timeframe':
            case 'change':
            default:
                break;
         }
	

    }
}

}
*/

?>