<?php include_once "phpValidation/offered_info.php" ;?>
<html>
	<head>
		<title>Offer Course</title>
		<style>
		body{
			background-color:white;
			
			font-family:"Poppins", "Arial", "Helvetica Neue", sans-serif;
		}
		.back{
			text-decoration: none;
			background: maroon;
			line-height: 40px;
			padding:10px 20px;
			transition:0.4s;
			cursor: pointer;
			font-size: 18px;
			color: #fff;
			border-radius: 5px;
		}
		.main{
			background-color:skyblue;
			
			padding:30px 40px 30px 30px;;
			width: 550px;
			height: 650px;
			position: absolute;
			top:0px;
			left:0px;
			right:0px;
			bottom:0px;
			margin: auto;
			border-radius:15px;
			font-size: 18px;
			color: #555;
			
		}
		.ibox{
			line-height: 40px;
			border-radius:5px;
			font-size: 16px;
			width: 300px;
		}
		.align{
			float:right;
		}
		.nwd{
			width: 147px;
			line-height: 40px;
			border-radius:5px;
			font-size: 16px;
		}
		.fname{
			margin-right:3px;
		}
		.lname{
			margin-left:3px;
		}
		.btn{
			background: maroon;
			line-height: 40px;
			padding: 0 50px;
			transition:0.4s;
			cursor: pointer;
			font-size: 18px;
			color: #fff;
			outline: none;
			border: none;
			border-radius: 5px;
			float: right;
			
		}
		.btn:hover{
			background-color:#3868CD;
		}
		label{
			line-height: 40px;
		}
		</style>
	</head>
	<body>
		<div class="main">
				
				<h2 style="text-align:center; color:#525252">Offer Course</h2>
				
				You must have to fill (<span style="color:red">*</span>) fields.<br><br>
				<form action="" method="post">
					<div>
					
					
					<label>Course Name</label>
					<input class="ibox align" type="text" value="" name="coursename">
					<span style="color:red;">*<?php echo $err_coursename;?></span>
					<br><br>
					
				    <label>Section</label>
					<input class="ibox align" type="text" value="" name="section">
					<span style="color:red;">*<?php echo $err_section;?></span>
					<br><br>
					
					<label>Room</label>
					<input class="ibox align" type="phone" value="" name="room">
					<span style="color:red;">*<?php echo $err_room;?></span>
					<br><br>
					
					<label>Status</label>
					<input class="ibox align" type="text" value="" name="status">
					<span style="color:red;">*<?php echo $err_status;?></span>
					<br><br>
					
					<label>Count</label>
					<input class="ibox align" type="phone" value="" name="count">
					<span style="color:red;">*<?php echo $err_count;?></span>
					<br><br>
					
					</div><br><br>
					<a class="back" href="dashboard.php">Back</a>
					<input class="btn" type="submit" name="signup" value="Submit">
						
				</form>
			
		</div>
	</body>
</html>