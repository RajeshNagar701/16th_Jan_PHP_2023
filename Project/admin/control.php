<?php
include_once('model.php');  // step 1 load model page

class control extends model  // step 2 extends model class for call func
{
	
	function __construct()
	{
		session_start();
		model::__construct();  // step 3 call modell __construct func 
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case '/admin':
			if(isset($_REQUEST['submit']))
			{
				$anm=$_REQUEST['anm'];
				$apass=md5($_REQUEST['apass']); 
				
				$arr=array("anm"=>$anm,"apass"=>$apass);
				
				$res=$this->select_where('admin',$arr); // func call  and cond check 
				$chk=$res->num_rows; // check res by rows that cond true or not
			
				if($chk==1) // 1 means true / and 0 means false
				{
					$fetch=$res->fetch_object(); // data fetch after function call
					// session create 
					$_SESSION['aid']=$fetch->aid;
					$_SESSION['anm']=$fetch->anm;
					$_SESSION['admin']=$fetch->name;
					
					
					echo "
					<script>
					alert('Login Success');
					window.location='dashboard';
					</script>
					";
				}
				else
				{
					echo "
					<script>
					alert('Login Failed due to wrong creadential !');
					window.location='admin';
					</script>
					";
				}
			}
			include_once('index.php');
			break;
			
			case '/adminlogout':
			unset($_SESSION['aid']);
			unset($_SESSION['anm']);
			unset($_SESSION['admin']);
			echo "
					<script>
					alert('Logout Success');
					window.location='admin';
					</script>
					";
			break;
	
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$emp_arr=$this->select('employees');
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
			$countries_arr=$this->select('countries');
			include_once('manage_loc.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->select('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->select('contact');
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