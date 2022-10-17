<?php 
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function addRegCourse($course_id){
		global $id;
        $query="INSERT INTO student_register(id, course_id) VALUES ('$id','$course_id')";
        execute($query);
    }
	function getCourseID($course_title){
		$query="SELECT * FROM offered_courses WHERE course_title='$course_title'";
		return get($query);
	}
?>
<?php
    $err_msg="";
	
	$hasError=false;
	if(isset($_POST["register"])){
		if(empty($_POST["avCourse"]))
		{
			$err_msg="You have to take atleast one course";
			$hasError=true;
		}
		else if(count($_POST["avCourse"])>4)
		{
			$err_msg="You can take upto 4 courses";
			$hasError=true;
		}
		if(!$hasError){
			foreach($_POST["avCourse"] as $t)
			{
				$c_id=getCourseID($t);
				addRegCourse($c_id[0]['course_id']);
				
			}
			header("Location: portal.php");
		}
	}	
?>