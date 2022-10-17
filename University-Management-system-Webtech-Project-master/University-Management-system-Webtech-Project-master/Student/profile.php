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
						    <td colspan="2"><h2><?php echo $student_info[0]["name"];?></h2></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Student ID :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["id"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>CGPA :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["cgpa"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Credit :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["credit"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Program :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["program"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Department :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["dept"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Core :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["core"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Major :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["major"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Second Major :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["second_major"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Minor :	</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["minor"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Elective :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["elective"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Father Name :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["father_name"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Mother Name :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["mother_name"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Present Address :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["present_address"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Verified Contact :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["varified_contact"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Verified Email :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["varified_email"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>DOB :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["dob"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Sex :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["sex"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Nationality :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["nationality"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Religion :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["religion"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Marital Status :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["marital_status"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
						<tr>
						    <td align="right"><h3>Blood Group :</h3></td>
							<td align="left"><h3>&nbsp &nbsp <?php echo $student_info[0]["blood_group"];?></h3></td>
						</tr>
						<tr><td colspan="2"><hr></td></tr>
					</table>
		        </div>
		    </div>
		</div>
	</body>
</html>