<?php
class control
{
	function __construct()
	{
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case '/admin':
			include_once('index.php');
			break;
	
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			include_once('manage_emp.php');
			break;
			
			case '/add_cat':
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			include_once('manage_cat.php');
			break;
			
			case '/add_loc':
			include_once('add_loc.php');
			break;
			
			case '/manage_loc':
			include_once('manage_loc.php');
			break;
			
			case '/manage_user':
			include_once('manage_user.php');
			break;
			
			case '/manage_contact':
			include_once('manage_contact.php');
			break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>