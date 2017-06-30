<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'deny_reason' :
		$content 	= 'deny_reason.php';
		$template	= '../include/template.php';
		break;
	
	case 'deniedList' :
		$content 	= 'deniedList.php';
		$template	= '../include/template.php';
		break;
	
			
	default :
		$content 	= 'approvedList.php';
		$template	= '../include/template.php';
}

require_once $template;

?>





