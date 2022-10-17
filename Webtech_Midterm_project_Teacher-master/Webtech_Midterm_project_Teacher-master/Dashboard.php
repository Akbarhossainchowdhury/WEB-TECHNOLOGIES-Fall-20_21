<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: T_login.php");
  }
?>
<center>
<!DOCTYPE html>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left: 70px;
  max-width: 80%;
  margin: auto;
  margin-top: 15px;

}

.topnav a {
  color: #f2f2f2;
  text-align: center;
  padding: 14px 72px;
  text-decoration: none;
  font-size: 18px;
}

.topnav a:hover {
  background-color:#333 ;
  color: green
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {
  background-color: black;
}

</style>



<script src=""></script>
<link rel="" href="" />
<script src=""></script>
</head>
<body>
<span style="font-size:45px; color:C133FF"><left><strong>Teacher Home</strong></left></span>
<div class="topnav">
  <a class="active" href="Student_info.php">View course student’s info</a>
  <a href="anonymous_review.php">View anonymous reviews</a>
  <a href="Upload.php">Upload Lecture</a>
   <a href="Grade_report.php">Grade report</a>
  <a href="T_logout.php">Logout</a>
 
</div>



    
</body>
</html></center>
