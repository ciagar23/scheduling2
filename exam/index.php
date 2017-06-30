<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'temp_exam' :
		$content 	= 'tempList.php';
		$template	= '../include/template.php';
		break;
	
	case 'add' :
		$content 	= 'add.php';
		$template	= '../include/template.php';
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template	= '../include/template.php';
		break;
		
	case 'adminList' :
		$content 	= 'adminList.php';
		$template	= '../include/template.php';
		break;
	
	case 'vpaaList' :
		$content 	= 'vpaaList.php';
		$template	= '../include/template.php';
		break;
	
	case 'facultyList' :
		$content 	= 'facultyList.php';
		$template	= '../include/template.php';
		break;
	
	case 'facultyCalendar' :
		$content 	= 'facultyCalendar.php';
		$template	= '../include/blank.php';
		break;
	
	case 'studentCalendar' :
		$content 	= 'studentCalendar.php';
		$template	= '../include/blank.php';
		break;
	
	case 'areaList' :
		$content 	= 'areaList.php';
		$template	= '../include/template.php';
		break;
	
	case 'studentList' :
		$content 	= 'studentList.php';
		$template	= '../include/template.php';
		break;
			
	default :
		$content 	= 'add.php';
		$template	= '../include/template.php';
}

require_once $template;

?>





