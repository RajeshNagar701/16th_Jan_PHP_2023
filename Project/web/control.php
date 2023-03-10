<?php
class control
{
	function __construct()
	{
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
	
			case '/about':
			include_once('about.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>