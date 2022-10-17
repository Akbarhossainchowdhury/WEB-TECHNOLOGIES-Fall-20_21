<?php include_once "session-header.php" ;?>
<?php include_once "validation/validation-addcourse.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getAvailableCourses(){
		global $id;
        $query="SELECT offered_courses.course_title FROM offered_courses EXCEPT SELECT offered_courses.course_title FROM student_info INNER JOIN student_course ON student_info.id=student_course.id INNER JOIN offered_courses ON student_course.course_id=offered_courses.course_id WHERE student_info.id='$id'";
        return get($query);
    }
	$available_courses=getAvailableCourses();
	
?>
<html>
    <head>
	    <title>Student Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	    <div id="container">
		    <fieldset>
			    <div id="header">
				    <?php include_once "header.php";?>
		        </div>
			</fieldset>
		    
			<div id="content">
		        <div id="nav">
				    <?php include_once "navigation.php";?>
		        </div>
				<div id="main">
				<form action="" method="post">
				    <table>
					    <tr>
						    <td align="right"><input style="color:red;font-weight: bold;" type="submit" name="register" value="Confirm Registration"></td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<tr>
						    <td style="color:red"><?php echo $err_msg;?></td>
						</tr>
						<?php foreach($available_courses as $course){ 
						
						?>
						<tr>
						    <td><input type="checkbox" name="avCourse[]" value="<?php echo $course['course_title'];?>"><?php echo $course['course_title'];?></td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<?php } ?>
					</table>
				</form>
		        </div>
		    </div>
		</div>
	</body>
</html>