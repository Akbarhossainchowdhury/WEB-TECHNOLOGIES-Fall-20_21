<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getCourseInfo(){
		global $id;
        $query="SELECT offered_courses.course_title,offered_courses.course_id,offered_courses.status,offered_courses.time_slot,student_course.mid_mark,student_course.final_mark,student_course.mid_grade,student_course.final_grade,student_course.total_mark,student_course.total_grade,offered_courses.course_teacher FROM student_info INNER JOIN student_course ON student_info.id=student_course.id INNER JOIN offered_courses ON student_course.course_id=offered_courses.course_id WHERE student_info.id='$id'";
        return get($query);
    }
	$course_info=getCourseInfo();
?>
<html>
    <head>
	    <title>Course and results</title>
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
				<fieldset>
				<div id="main">
				    <div id="course-sem">
					    <table>
						    <tr style="background-color: #187fc3;">
							    <td colspan="4"><h1>Grades Marks Quizes</h1></td>
							</tr>
							<tr>
							    <td style="width:35%"></td>
							    <td style="width:35%">
						        </td>
								<td style=>Semesters:</td>
							    <td>
							        <select name = "courses">
								        <option>2019-2020,Summer</option>
							        </select>
						        </td>
							</tr>
						</table>
					</div>
					<?php 
				        foreach($course_info as $course)
					    {
				    ?>
					<fieldset>
					<div id="internal">
					    <table>
					        <tr>
							    <td colspan="2" align="left"><h2><?php echo $course["course_title"];?></h2></td>
							</tr>
							<tr>
							    <td colspan="2" align="left">Total Mark :100; Passing Mark:50; Contributes:100%</td>
							</tr>
							<tr>
							    <td align="left">Course Teacher(s):<?php echo $course["course_teacher"];?></td>
							    <td align="right"><h3><?php echo $course["total_grade"];?> (<?php echo $course["total_mark"];?>)</h3></td>
							</tr>
							<tr>
							    <td align="left"><h3>Midterm <sub>(Total:40; Pass:20; Contributes:40%)</h3></td>
							    <td align="right"><h3><?php echo $course["mid_grade"];?> (<?php echo $course["mid_mark"];?>)</h3></td>
							</tr>
							<tr>
							    <td align="left"><h3>Finalterm <sub>(Total:60; Pass:30; Contributes:60%)</sub></h3></td>
							    <td align="right"><h3><?php echo $course["final_grade"];?> (<?php echo $course["final_mark"];?>)</h3></td>
							</tr>
					    </table>
					</div>
					</fieldset>
					<?php } ?>
		        </div>
				</fieldset>
		    </div>
		</div>
	</body>
</html>