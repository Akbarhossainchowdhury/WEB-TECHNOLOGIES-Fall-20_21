<?php 
	if(!isset($_COOKIE["username"])){
		
	}
	
?>
<html>
	<head>
		<title>Dashboard</title>
		<style>
			.logout{
				color: #ffff;
				background-color: maroon;
				border: none;
				padding: 8px 16px;
				text-decoration: none;
				text-align: center;
				cursor: pointer;
				position: absolute;
				top: 10px;
				right: 10px;
			}
			.logout:hover{
				background-color:#000000;
			}
			body{
				background-image: url(img/lib.jpg);
				background-position:center-center;
				background-size:cover;
				background-repeat: no-repeat;
			}
			.navigation {
				background: black;
				min-height: 43px;
				border-bottom: 3px solid black;
			}
			.navigation ul{}
			.navigation ul li {
				list-style: none;
				background: black;
				float: left;
				border-right: 1px solid white;
				border-left: 1px solid white;
				position: relative;
				z-index:1;
			}
			.navigation ul li a {
				text-decoration: none;
				color: white;
				display: block;
				padding: 12px 32px 12px 32px;
				font-weight: bold;
				-webkit-transition:.5s;
				-moz-transition:.5s;
				-o-transition:.5s;
			}
			.navigation ul li a:hover, #active {
				color: #000;
				background: skyblue;
				transition:.5s;
			}
			.navigation ul li ul {
				position:absolute;
				display:none;
			}	
			.navigation ul li:hover ul {
				left:-40px;
				display: block;
			}
			.navigation ul li ul li:last-child {
				border-bottom:0px solid black;
			}
			.navigation ul li ul li {
				background: skyblue;
				width: 145px;
				border-bottom: 2px solid black;
				float: none;
				border-right: 0px;
				border-left: 0px;
			}
			.sitem{
				margin-top:15px;
				
			}
			.sbox{
				position:absolute;
				right:0;
				left:0;
				margin:auto;
				line-height: 35px;
				border-radius:25px;
				border: none;
				font-size: 16px;
				width: 800px;
				padding-left: 20px;
				padding-right: 20px;
				z-index:0;
			}
			.sbtn{
				background-color:black;
				color:white;
				outline: none;
				border: none;
				cursor:pointer;
				position:absolute;
				right:0;
				left:0;
				margin:auto;
				line-height: 35px;
				border-radius:25px;
				font-size: 16px;
				width: 100px;
				margin-top:30px;
				
			}
		</style>
	</head>
	<body>
		
		<span style="font-size:30px; color:black">Welcome, 
			<?php 
				echo $_COOKIE["username"];
			?>
		</span> 
		<a class="logout" href='login.php'>Log Out</a>
		<br>
		<div class="navigation">
			<ul>
			
				<li><a href="#">OFFERED COURSES</a>
					<ul> 
						
						<li><a href="offered.php">Create</a></li>
						<li><a href="offeredinfo.php">View</a></li>
						
							
					</ul>
				</li>
				<li><a href="#">TEACHER</a>
					<ul> 
						<li><a href="addteacher.php">Add Teacher</a></li>
						<li><a href="assigncourse.php">Assign Courses</a></li>
						<li><a href="course_info.php">Assigned Courses</a></li>
						<li><a href="teacherupdate.php">Update</a></li>
						<li><a href="teacherdelete.php">Delete</a></li>		
					</ul>
				</li>
				<li><a href="#">STUDENTS</a>
					<ul> 
					<li><a href="enrollinfo.php">Student Enrollment</a></li>
					<li><a href="student_info.php"> Enrolled Students</a></li>
					
						
								
					</ul>
				</li>
				
				<li><a href="#">GENERATE REPORT</a>
					<ul> 
						<li><a href="offered_courses_report.php">Offered Courses</a></li>
						
					</ul>
				</li>
				<li><a href="#">RELEASE CERTIFICATE</a>
					<ul> 
						<li><a href="certificate">Certificate</a></li>
						
					</ul>
				</li>
			</ul>
		</div>
		<div class="sitem">
		
		<input class="sbox" type="text" name="searchbox" placeholder="type here..."><br>
		<input class="sbtn" type="submit" name="search" value="Search">
		</div>
				
	</body>
</html>