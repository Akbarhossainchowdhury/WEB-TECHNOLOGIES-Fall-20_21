<?php include_once "session-header.php" ;?>
<?php
    require_once 'models/db_connection.php';
	$id=$_COOKIE["studentid"];
	function getNotes($course_id){
        $query="SELECT * FROM course_notes WHERE course_id='$course_id'";
        return get($query);
    }
	$note_info=getNotes($_GET['course_id']);
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
						    <td><h1>Notes<h1></td>
						</tr>
						<?php foreach($note_info as $n)
						{ if($n['note_name']=="")
							{
								continue;
							}
						?>
					    <tr>
						    <td><h3># &nbsp <a href="<?php echo $n['note_link']; ?>" download><?php echo $n['note_name']; ?></a></h3></td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<?php } ?>
					</table>
		        </div>
		    </div>
		</div>
	</body>
</html>