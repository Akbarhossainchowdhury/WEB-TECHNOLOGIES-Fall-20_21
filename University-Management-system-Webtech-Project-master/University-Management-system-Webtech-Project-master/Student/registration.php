<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getRegCourseInfo(){
		global $id;
        $query="SELECT offered_courses.course_title,offered_courses.course_id,offered_courses.time_slot FROM student_info INNER JOIN student_register ON student_info.id=student_register.id INNER JOIN offered_courses ON student_register.course_id=offered_courses.course_id WHERE student_info.id='$id'";
        return get($query);
    }
	$registered_courses=getRegCourseInfo();
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
				    <table>
					    <tr>
						    <td align="right"><a href="addcourse.php"><h2 style="color:red"> ADD COURSE</h2>
						</tr>
						<tr style="background-color: #187fc3;">
						    <td><h2>Registered Courses</h2></td>
						</tr>
						<?php foreach($registered_courses as $rc){ ?>
						<tr>
						    <td><?php echo $rc["course_id"];?> - <?php echo $rc["course_title"];?></td>
						</tr>
						<?php 
						    if($rc["time_slot"]==1)
							{
								echo "<tr>
						        <td>[Theory]Monday 8AM-11AM</td>
						        </tr>
						        <tr>
						        <td>[Lab]Wednesday 8AM-11AM</td>
						        </tr>
						        <tr>
						        <td><hr></td>
						        </tr>";
							}
							else if($rc["time_slot"]==2)
							{
								echo "<tr>
						        <td>[Theory]Monday 2PM-5PM</td>
						        </tr>
						        <tr>
						        <td>[Lab]Wednesday 2PM-5PM</td>
						        </tr>
						        <tr>
						        <td><hr></td>
						        </tr>";
							}
							else if($rc["time_slot"]==3)
							{
								echo "<tr>
						        <td>[Theory]Sunday 8AM-11AM</td>
						        </tr>
						        <tr>
						        <td>[Lab]Tuesday 8AM-11AM</td>
						        </tr>
						        <tr>
						        <td><hr></td>
						        </tr>";
							}
							else if($rc["time_slot"]==4)
							{
								echo "<tr>
						        <td>[Theory]Sunday 2PM-5PM</td>
						        </tr>
						        <tr>
						        <td>[Lab]Tuesday 2PM-5PM</td>
						        </tr>
						        <tr>
						        <td><hr></td>
						        </tr>";
							}
					    }
						?>
					</table>
		        </div>
		    </div>
		</div>
	</body>
</html>