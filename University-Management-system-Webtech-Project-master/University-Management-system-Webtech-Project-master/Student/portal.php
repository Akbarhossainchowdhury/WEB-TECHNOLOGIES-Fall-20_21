<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getCourseInfo(){
		global $id;
        $query="SELECT offered_courses.course_title,offered_courses.course_id,offered_courses.status,offered_courses.time_slot,student_course.mid_mark,student_course.final_mark,student_course.mid_grade,student_course.final_grade,student_course.total_mark,student_course.total_grade FROM student_info INNER JOIN student_course ON student_info.id=student_course.id INNER JOIN offered_courses ON student_course.course_id=offered_courses.course_id WHERE student_info.id='$id'";
        return get($query);
    }
	$course_info=getCourseInfo();
	$time_slot1="-";
	$time_slot2="-";
	$time_slot3="-";
	$time_slot4="-";
	foreach($course_info as $course)
	{
		if($course["time_slot"]==1)
		{
			$time_slot1=$course["course_title"];
		}
		else if($course["time_slot"]==2)
		{
			$time_slot2=$course["course_title"];
		}
		else if($course["time_slot"]==3)
		{
			$time_slot3=$course["course_title"];
		}
		else if($course["time_slot"]==4)
		{
			$time_slot4=$course["course_title"];
		}
	}
?>
<html>
    <head>
	    <title>EPU Portal</title>
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
					    <tr style="background-color: #187fc3;">
						    <td colspan="3"><h2 align="center">Class Schedule<h2></td>
						</tr>
						<tr>
						    <td></td>
							<td align="center"><b><u>8AM-11AM</u></b></td>
							<td align="center"><b><u>2PM-5PM</u></b></td>
						</tr>
						<tr>
						    <td><h3>Saturday</h3></td>
							<td colspan="2"><h3>No Class On This Day</h3></td>
						</tr>
						<tr>
						    <td style="width:20%"><h3>Sunday</h3></td>
							<td style="width:40%"><?php echo $time_slot3; ?></td>
							<td style="width:40%"><?php echo $time_slot4; ?></td>
						</tr>
						<tr>
						    <td><h3>Monday</h3></td>
							<td><?php echo $time_slot1; ?></td>
							<td><?php echo $time_slot2; ?></td>
						</tr>
						<tr>
						    <td><h3>Tuesday</h3></td>
							<td><?php echo $time_slot3; ?></td>
							<td><?php echo $time_slot4; ?></td>
						</tr>
						<tr>
						    <td><h3>Wednesday</h3></td>
							<td><?php echo $time_slot1; ?></td>
							<td><?php echo $time_slot2; ?></td>
						</tr>
						<tr>
						    <td><h3>Thursday</h3></td>
							<td colspan="2"><h3>No Class On This Day</h3></td>
						</tr>
						<tr>
						    <td><h3>Friday</h3></td>
							<td colspan="2"><h3>No Class On This Day</h3></td>
						</tr>
					</table>
		        </div>
		    </div>
			<div id="footer">
			    <div id="reg">
				    <h2>Registration</h2>
				</div>
				<?php 
				    foreach($course_info as $course)
					{
				?>
		         <div class="box">
				    <table>
					    <tr>
						    <td colspan="2"><?php echo $course["course_id"];?> - <?php echo $course["course_title"];?></td>
							<td align="right"><a href="notes.php?course_id=<?php echo $course["course_id"];?>"><h3> &#128196 Notes</h3></a></td>
						</tr>
						<tr>
						    <td colspan="2"><b>Section Status: &nbsp <?php echo $course["status"];?></b></td>
							<td align="right"><a href="notices.php?course_id=<?php echo $course["course_id"];?>"><h3> &#128197 Notices</h3></a></td>
						</tr>
						<tr>
						    <td colspan="2"><b>Result: &nbsp <?php echo $course["total_grade"];?>(<?php echo $course["total_mark"];?>)</b></td>
							<td align="right"><a href="assignments.php?course_id=<?php echo $course["course_id"];?>"><h3> &#128221 Assignments</h3></a></td>
						</tr>
					</table>
				</div>
				<?php } ?>
		    </div>
		</div>
	</body>
</html>