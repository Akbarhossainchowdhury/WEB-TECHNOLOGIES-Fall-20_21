<?php
	$coursename = $section = $room = $status =$count = "";
     $err_coursename = $err_section = $err_room = $err_status = $err_count = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		
		if(empty ($_POST["coursename"])){
			$err_coursename="Course Name Required";
			$hasError = true;
		}
		else{
			$coursename = htmlspecialchars($_POST["coursename"]);
		}
		if(empty ($_POST["section"])){
			$err_section="Section Required";
			$hasError = true;
		}
		else{
			$section = htmlspecialchars($_POST["section"]);
		}
		if(empty ($_POST["room"])){
			$err_room="Room Required";
			$hasError = true;
		}
		else{
			$room = htmlspecialchars($_POST["room"]);
		}
		if(empty ($_POST["status"])){
			$err_status="Status Required";
			$hasError = true;
		}
		else{
			$status = htmlspecialchars($_POST["status"]);
		}
		
		if(empty ($_POST["count"])){
			$err_count="Count Required";
			$hasError = true;
		}
		else{
			$count = htmlspecialchars($_POST["count"]);
		}
		if(!$hasError){
			$users = simplexml_load_file("xml/offered.xml");
			
			$user = $users->addChild("user");
			
			
			$user->addChild("coursename",$coursename);
			$user->addChild("section",$section);
			$user->addChild("room",$room);
			$user->addChild("status",$status);
			$user->addChild("count",$count);
	
			
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("xml/offered.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>