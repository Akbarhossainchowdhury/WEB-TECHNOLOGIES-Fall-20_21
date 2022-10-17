<?php
	require_once 'phpValidation/validation_student_info.php';

		
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Student Enrollment
			</title>
			
		</head>
	<body>
	<a href="dashboard.php"><button class="home">HOME</button></a>
	<div class="cell">
	<h1><?php echo 'Student Enroll'; ?></h1>
	<input type="text" onkeyup="liveSearch(this)" placeholder="Write student name..." id="ssearchBox">
		<table class="center content-table" id="myTable">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					
					<th>Gender</th>
					<th>Course</th>
					<th>Section</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach($student as $s) { ?>
			<tr>
				<td><?php echo $s['id']; ?></td>
				<td><?php echo $s['first_name']." ".$s['last_name']; ?></td>
				<td><?php echo $s['dob']; ?></td>
				<td><?php echo $s['gender']; ?></td>
				<td><?php echo $s['phone']; ?></td>
				<td><?php echo $s['email']; ?></td>
				
				<td>
					<a href="teacherupdate.php?id=<?php echo $t['id'];?>"><button class="edit">Edit</button></a>
					<a href="teacherdelete.php?id=<?php echo $t['id'];?>" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
			</tr>
			<?php } ?>
			<tbody>			
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  
	</body>
</html>