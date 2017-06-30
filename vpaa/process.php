<?php

require_once '../config/database.php';
include_once("../config/function.php");

$action = $_GET['action'];	
	
switch ($action) {
    
		
	case 'deny_reason' :
		deny_reason();
		break;
		

	default :
}


function deny_reason(){
	$id = $_POST['id'];
	$reason = $_POST['reason'];
	
	mysql_query("insert into denied_reason where exam_id=$id and reason='$reason'");
												
	header('Location: ../exam/?view=vpaaList&id='.$id.'&success=Successfully Denied.');
	
}

?>