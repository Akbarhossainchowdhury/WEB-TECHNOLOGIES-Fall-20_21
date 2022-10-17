<?php
	require_once 'phpValidation/validation_teacher_info.php';
	$teacher = getteacherinfo();
		
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Teacher Information
			</title>
			
		</head>
	<body>
	<a href="dashboard.php"><button class="home">HOME</button></a>
	<div class="cell">
	<h1><?php echo 'Teacher Information'; ?></h1>
	<input type="text" onkeyup="liveSearch(this)" placeholder="Write teacher name..." id="ssearchBox">
		<table class="center content-table" id="myTable">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Date Of Birth </th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach($teacher as $t) { ?>
			<tr>
				<td><?php echo $t['id']; ?></td>
				<td><?php echo $t['firstname']." ".$t['lastname']; ?></td>
				<td><?php echo $t['dob']; ?></td>
				<td><?php echo $t['gender']; ?></td>
				<td><?php echo $t['phone']; ?></td>
				<td><?php echo $t['email']; ?></td>
				
				<td>
					<a href="teacherupdate.php?id=<?php echo $t['id'];?>"><button class="edit">Edit</button></a>
					<a href="teacherdelete.php?id=<?php echo $t['id'];?>" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
			</tr>
			<?php } ?>
			<tbody>			
		</table>
	</div>
	
  
	</body>
</html>