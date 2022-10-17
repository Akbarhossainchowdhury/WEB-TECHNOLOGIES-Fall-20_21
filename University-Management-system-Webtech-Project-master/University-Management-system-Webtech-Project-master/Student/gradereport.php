<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getStudentInfo(){
		global $id;
        $query="SELECT * FROM student_info WHERE id=".$id."";
        return get($query);
    }
	$student_info=getStudentInfo();
?>
<html>
    <head>
	    <title>Grade Report</title>
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
				    <table>
					    <tr style="background-color: #187fc3;">
						    <td colspan="6"><h1>Curriculum Grade Report<h1></td>
						</tr>
						<tr>
						    <td><h3>Student ID</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["id"];?></h3></td>
							<td><h3>Core</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["core"];?></h3></td>
						</tr>
						<tr>
						    <td><h3>Student Name</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["name"];?></h3></td>
							<td><h3>Major</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["major"];?></h3></td>
						</tr>
						<tr>
						    <td><h3>Credit(s) Completed</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["credit"];?></h3></td>
							<td><h3>Second Major</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["second_major"];?></h3></td>
						</tr>
						<tr>
						    <td><h3>Course(s) Completed</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["course_completed"];?></h3></td>
							<td><h3>Minor</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["minor"];?></h3></td>
						</tr>
						<tr>
						    <td><h3>Cgpa</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["cgpa"];?></h3></td>
							<td><h3>Elective</h3></td>
							<td><h3>:</h3></td>
							<td><h3><?php echo $student_info[0]["elective"];?></h3></td>
						</tr>
					</table>
		        </div>
				</fieldset>
		    </div>
		</div>
	</body>
</html>