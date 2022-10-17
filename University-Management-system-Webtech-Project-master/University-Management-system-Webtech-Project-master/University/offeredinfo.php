<?php
if(isset($_GET['action'])) {
	$users = simplexml_load_file('xml/offered.xml');
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	foreach($users->user as $user){
		if($user['id']==$id){
			$index = $i;
			break;
		}
		$i++;
	}
	unset($users->user[$index]);
	file_put_contents('xml/offered.xml', $users->asXML());
	}
	$users = simplexml_load_file('xml/offered.xml');
	
	$finfo= 'Course Information';
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Offered Course
			</title>
			<style>
				.content-table{
					border-collapse: collapse;
					margin:25px 0;
					font-size:25px;
					min-width:600px;
					border-radius:10px 10px 0 0;
					overflow: hidden;
					box-shadow:0 0 20px rgba(0,0,0,0.15);
				}
				.content-table thead tr{
					
					background-color:skyblue;
					border-radius: 10px;
					color: white;
					text-align:left;
				}
				.content-table th,
				.content-table td{
					padding: 12px 15px;
				}
				.content-table tbody tr{
					border-bottom: 1px solid skyblue;
				}
				.content-table tbody tr:nth-of-type(even){
					background-color:#f3f3f3;
				}
				.content-table tbody tr:last-of-type{
					border-bottom: 2px solid skyblue;
				}
				table tr a button{
					background-color: red;
					cursor: pointer;
					padding: 15px;
					border-radius: 6px;
					border: none;
					color: white;
					font-weight:bold
					
				}
				.edit{
					background-color: green;
					cursor: pointer;
					padding: 15px;
					border: none;
					color: white;
					font-weight:bold;
					border-radius: 6px;
					
				}
			</style>
			
		</head>
	<body>
	<div class="cell">
	<h1><?php echo $finfo ?></h1>

		<table class="content-table">
			<thead>
				<tr>
					
					<th>Course Name</th>
					<th>Section</th>
					<th>Room</th>
					<th>Status</th>
					<th>Count</th>
					
					
					<th>Action</th>
				
				</tr>
			</thead>
			
			
			<tbody>
			<?php foreach($users->user as $user) { ?>
			<tr>
				
				<td><?php echo $user->coursename; ?></td>
				<td><?php echo $user->section; ?></td>
				<td><?php echo $user->room; ?></td>
				<td><?php echo $user->status; ?></td>
				<td><?php echo $user->count; ?></td>
				<td><button class="edit">Update</button>
				<a href="offeredinfo.php?action=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<tbody>
			
			
		</table>
	</div>
	</body>
</html>