<?php 
    require_once 'models/db_connection.php';
?>

<?php
	$studentid="";
	$password="";
	$err_studentid="";
	$err_password="";
	$invalid_info="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["studentid"])){
			$err_studentid="*Student id required";
			$hasError = true;
		}
		elseif(strlen($_POST["studentid"]) != 7){
			$err_studentid="*Invalid Student ID";
			$hasError = true;
		}
		else{
			$studentid=$_POST["studentid"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 6){
			$err_password="*Password must be 6 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		if(!$hasError){
           if(getUser()){
               session_start();
               $_SESSION["studentid"] = $studentid;
               setcookie("studentid",$studentid,time() + 180);
               header("Location: portal.php");
           }
           else{
               $invalid_info="Student ID or Password is Incorrect";
           }
        }
	}
	function getUser(){
        global $studentid,$password;
        $query="SELECT * FROM student_info WHERE id='$studentid' AND password='$password'";
        $result=get($query);
        if(count($result)>0){
            return true;
        }
        return false;
    }
?>