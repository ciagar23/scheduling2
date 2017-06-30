<?php

require_once '../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'login' :
		login();
		break;

	case 'register' :
		register();
		break;
	
	case 'changepassword' :
		changepassword();
		break;
		
	case 'logout' :
		logout();
		break;
	
	default :
}


function login()
{
	// if we found an error save the error message in this variable
	
	$idnumber = $_POST['idnumber'];
	$password = $_POST['password'];
	
	$query = mysql_query("select * from user where idnumber = '".$idnumber."' and password = '".$password."'");
	
	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $idnumber;
		if ($password == 'temppassword'){
			header('Location: index.php?view=changepassword');
		}
		else{
			header('Location: ../home/');
		}

			
	}
	else
	{
		header('Location: index.php?error=User not found in the Database');
	}
	
}


function logout()

{
	if (isset($_SESSION['user_session'])) {
		unset($_SESSION['user_session']);
	}
	header('Location: index.php');
	exit;
}


function register()
{
	$idnumber = $_POST['idnumber'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$auth = $_POST['auth'];
	$password = $_POST['password'];
	
	$area = $_POST['area'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$section = $_POST['section'];
	
		mysql_query("insert into user set idnumber='$idnumber',
														first_name='$firstname',
														last_name='$lastname',
														password='$password',
														auth='$auth'");
		
		if ($auth == 'Area Head'){		
			mysql_query("insert into area_head set idnumber='$idnumber',
														area='$area'");
		}
		else if($auth == 'Student'){												
			mysql_query("insert into student set idnumber='$idnumber',
														course='$course',
														year='$year',
														section='$section'");
		}
		
		header('Location: index.php?view=register&success=You have successfully registered a new user');
	
}

function changepassword()
{
	$idnumber = $_POST['idnumber'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];


	if ($password == $password2){
		
		if ($password != 'temppassword'){
			mysql_query("update user set	password='".$password."'
											where idnumber = '".$idnumber."'");
													
			header('Location: ../home');
		}
		else{
			header('Location: index.php?view=changepassword&error=Invalid Password');
		}
	}
	else
	{
		header('Location: index.php?view=changepassword&error=Password not matched');}
	
}

function delete()
{
	$id = $_GET['id'];	
	
	mysql_query("delete from user where Id = '".$id."'");
	
	header('Location: ../user/?view=list&message=Successfully Deleted.');
	
}

function update()
{
	$id = $_GET['id'];	
	
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];


	
	mysql_query("update user set username='".$username."',
												first_name='".$firstname."',
												last_name='".$lastname."',											
												password='".$password."',
												auth='admin'
												where Id = '".$id."'");
												
	header('Location: ../user/?view=detail&message=Successfully Updated.');
	
}

?>