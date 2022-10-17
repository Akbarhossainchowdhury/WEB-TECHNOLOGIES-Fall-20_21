<?php include_once "session-header.php" ;?>
<?php include_once "validation/validation-assignment.php" ;?>
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
				    <form action="" method="post" enctype="multipart/form-data">
				    <table>
					    <tr style="background-color: #187fc3;">
						    <td><h1>Assignments<h1></td>
						</tr>
						<tr>
						    <td><input type="file" name="file"/></td>
						</tr>
						<tr>
						    <td><input Style="color:blue;font-weight: bold;" type="submit" name="upload" value="Upload file"><span style="color:green;"><?php echo $success_msg;?></span></td>
						</tr>
					    <tr>
						    <td><hr></td>
						</tr>
					</table>
					</form>
		        </div>
		    </div>
		</div>
	</body>
</html>