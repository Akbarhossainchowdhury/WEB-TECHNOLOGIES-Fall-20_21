<?php
    require_once 'models/db_connection.php';
	
	$course_title=$_GET["course_title"];
    function searchCourse($course_title){
	    $query ="SELECT * FROM offered_courses WHERE course_title like '%$course_title%'";
	    $result =get($query);
	    return $result;
    }
	$result=searchCourse($course_title);
	if(count($result)>0)
	{
		?>
		<table>
			<tr>
				<td align="center" colspan="6"><h3><u>Search Result:</u><h3></td>
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
			foreach($result as $course){
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
						<tr>
						    <td align="center" colspan="6"><h3><u>All Courses:</u><h3></td>
						</tr>
					</table>
	<?php } ?>
