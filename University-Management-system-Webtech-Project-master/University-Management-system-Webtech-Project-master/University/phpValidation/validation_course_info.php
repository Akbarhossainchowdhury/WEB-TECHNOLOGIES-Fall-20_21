<?php
   
	$fname = $lname = $id  = $gender = $coursename = $section = $room = $phone = $email = "";
	$err_fname = $lname = $err_id = $err_gender  = $err_coursename = $err_section = $err_room = $err_phone  = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["fname"])){
			$err_fname="First Name Required";
			$hasError = true;
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		$lname = htmlspecialchars($_POST["lname"]);
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$hasError =true;	
		}
		elseif(strlen($_POST["id"]) < 6){
			$err_id="ID must be 6 characters long";
			$hasError = true;
		}
		else{
			$id = htmlspecialchars($_POST["id"]);
		}
		
		if(empty($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError =true;	
		}
		else{
			$gender =($_POST["gender"]);
		}
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
		
		if(empty ($_POST["phone"])){
			$err_phone="Phone Number required";
			$hasError = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		
		$email = htmlspecialchars($_POST["email"]);
		
		
		
		if(!$hasError){
			$users = simplexml_load_file("xml/assign.xml");
			
			$user = $users->addChild("user");
			$user->addAttribute("id", $id);
			$user->addChild("firstname",$fname);
			$user->addChild("lastname",$lname);
		
			$user->addChild("gender",$gender);
			$user->addChild("coursename",$coursename);
			$user->addChild("section",$section);
			$user->addChild("room",$room);
			$user->addChild("phone",$phone);
			$user->addChild("email",$email);
	
			
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("xml/assign.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>