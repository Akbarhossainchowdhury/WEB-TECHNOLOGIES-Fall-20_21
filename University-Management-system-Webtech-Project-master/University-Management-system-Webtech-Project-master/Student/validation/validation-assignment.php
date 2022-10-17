<?php
    $success_msg="";
    if(isset($_POST['upload'])){
		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_size = $_FILES['file']['size'];
		$file_location = $_FILES['file']['tmp_name'];
		$file_destination = "uploaded assignments/".$file_name;
		
		if(move_uploaded_file($file_location,$file_destination))
		{
			$success_msg="File upload successfull";
		}
	}

?>