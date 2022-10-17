<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getOfferedCourses(){
        $query="SELECT * FROM offered_courses";
        return get($query);
    }
	$offered_courses=getOfferedCourses();
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
					    <tr style="background-color: #187fc3;">
						    <td colspan="5"><h1>Offered Courses<h1></td>
							<td><input style="border-radius: 8px;" type="text" class="form-control" onkeyup="liveSearch(this)" placeholder="Search..." size="35"></td>
						</tr>
						<tr>
						    <td colspan="6"><div id="suggession"></div></td>
						</tr>
					    <tr>
						    <td><b>Class ID</b></td>
							<td><b>Title</b></td>
							<td><b>Status </b></td>
							<td><b>Capcity </b></td>
							<td><b>Count </b></td>
							<td><b>Time</b></td>
						</tr>
						<tr>
						    <td colspan="6"><hr></td>
						</tr>
						<?php
			                foreach($offered_courses as $course){
				            echo "<tr>";
				            echo "<td>".$course["course_id"]."</td>";
				            echo "<td>".$course["course_title"]."</td>";
				            echo "<td>".$course["status"]."</td>";
				            echo "<td>".$course["capacity"]."</td>";
				            echo "<td>".$course["count"]."</td>";
				            if($course["time_slot"]==1)
							{
								echo "<td>";
							    echo "<fieldset>";
							    echo "<table>
								    <tr>
									    <td>Theory</td>
										<td>Monday</td>
										<td>8AM</td>
										<td>11AM</td>
									</tr>
									<tr>
									    <td>LAB</td>
										<td>Wednesday</td>
										<td>8AM</td>
										<td>11AM</td>
									</tr>
								</table>";
								echo "</fieldset>";
							    echo "</td>";
							}
							else if($course["time_slot"]==2)
							{
								echo "<td>
							    <fieldset>
							    <table>
								    <tr>
									    <td>Theory</td>
										<td>Monday</td>
										<td>2PM</td>
										<td>5PM</td>
									</tr>
									<tr>
									    <td>LAB</td>
										<td>Wednesday</td>
										<td>2PM</td>
										<td>5PM</td>
									</tr>
								</table>
								</fieldset>
							    </td>";
							}
							else if($course["time_slot"]==3)
							{
								echo "<td>
							    <fieldset>
							    <table>
								    <tr>
									    <td>Theory</td>
										<td>Sunday</td>
										<td>8AM</td>
										<td>11AM</td>
									</tr>
									<tr>
									    <td>LAB</td>
										<td>Tuesday</td>
										<td>8AM</td>
										<td>11AM</td>
									</tr>
								</table>
								</fieldset>
							    </td>";
							}
							else if($course["time_slot"]==4)
							{
								echo "<td>
							    <fieldset>
							    <table>
								    <tr>
									    <td>Theory</td>
										<td>Sunday</td>
										<td>2PM</td>
										<td>5PM</td>
									</tr>
									<tr>
									    <td>LAB</td>
										<td>Tuesday</td>
										<td>2PM</td>
										<td>5PM</td>
									</tr>
								</table>
								</fieldset>
							    </td>";
							}
				            echo "</tr>";
							echo "<tr>";
						    echo "<td colspan='6'><hr></td>";
						    echo "</tr>";
			                }
		                ?>
						<tr>
						    <td></td>
							<td></td>
							<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
							<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
							<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
							<td></td>
						</tr>
					</table>
					<script src="scripts/search.js"></script>
		        </div>
		    </div>
		</div>
	</body>
</html>