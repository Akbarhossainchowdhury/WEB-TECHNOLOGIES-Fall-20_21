 <?php
 session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$serverName="localhost";
	$userName="root";
	$sPassword="";
	$Database_name  ="university_mangement_system";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		$enPass=md5($pass);
		$conn=mysqli_connect($serverName,$userName,$sPassword,$Database_name);
		$q = "select * from teacher where username='$uname' and password='$enPass'";
		if(!$hasError){
			$result =mysqli_query($conn, $q);
			
			
			{
				header("Location: Dashboard.php");
				$flag=true;
			
			}
		} if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
				header("Location: Dashboard.php");
	}
	
	}	
			
	
?>