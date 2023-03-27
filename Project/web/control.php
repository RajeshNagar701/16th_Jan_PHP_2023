<?php
include('../admin/model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		
		model::__construct();
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/signup':
			$countries_arr=$this->select('countries');
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$unm=$_REQUEST['unm'];
				$pass=md5($_REQUEST['pass']); // enc pass
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag']; // checkbox arr 
				$lag=implode(",",$lag_arr); // convert into string
				
				$cid=$_REQUEST['cid'];
				date_default_timezone_set('asia/calcutta');
				$created_at=date('Y-m-d H:i:s');
				$updated_at=date('Y-m-d H:i:s');
				
				$file=$_FILES['file']['name']; // get img name
				$path='upload/customer/'.$file; // path
				$tmp_file=$_FILES['file']['tmp_name']; // dup file
				move_uploaded_file($tmp_file,$path); // move dup file in path
				
				
				$arr=array("name"=>$name,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "
					<script>
					alert('Registered Success');
					window.location='index';
					</script>
					";
				}
				else
				{
					echo "not success";
				}
				
			}
			include_once('signup.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['unm'];
				$pass=md5($_REQUEST['pass']); 
				
				$arr=array("unm"=>$unm,"pass"=>$pass);
				
				$res=$this->select_where('customer',$arr); // func call  and cond check 
				$chk=$res->num_rows; // check res by rows that cond true or not
			
				if($chk==1) // 1 means true / and 0 means false
				{
					$fetch=$res->fetch_object(); // data fetch after function call
					
					// session create 
					$_SESSION['uid']=$fetch->uid;
					$_SESSION['unm']=$fetch->unm;
					$_SESSION['name']=$fetch->name;
					
					
					echo "
					<script>
					alert('Login Success');
					window.location='index';
					</script>
					";
				}
				else
				{
					echo "
					<script>
					alert('Login Failed due to wrong creadential !');
					window.location='login';
					</script>
					";
				}
			}
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['uid']);
			unset($_SESSION['unm']);
			unset($_SESSION['name']);
			echo "
					<script>
					alert('Logout Success');
					window.location='index';
					</script>
					";
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
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$sub=$_REQUEST['sub'];
				$msg=$_REQUEST['msg'];
				
				date_default_timezone_set('asia/calcutta');
				$created_at=date('Y-m-d H:i:s');
				$updated_at=date('Y-m-d H:i:s');
				
				$arr=array("name"=>$name,"sub"=>$sub,"msg"=>$msg,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "
					<script>
					alert('Contact Success');
					window.location='contact';
					</script>
					";
				}
				else
				{
					echo "not success";
				}
				
			}
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