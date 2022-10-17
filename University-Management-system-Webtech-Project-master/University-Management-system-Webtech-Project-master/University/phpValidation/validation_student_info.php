<?php
	$fname = $lname = $id  = $gender = $course = $section =  $email = "";
	$err_fname = $lname = $err_id = $err_gender  = $err_course = $err_section  = "";
	
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
		if(empty ($_POST["course"])){
			$err_course="Course Name Required";
			$hasError = true;
		}
		else{
			$course= htmlspecialchars($_POST["course"]);
		}
		if(empty ($_POST["section"])){
			$err_section="Section Required";
			$hasError = true;
		}
		else{
			$section = htmlspecialchars($_POST["section"]);
		}
		
		
		
		$email = htmlspecialchars($_POST["email"]);
		
		
		
		if(!$hasError){
			$users = simplexml_load_file("xml/student_data.xml");
			
			$user = $users->addChild("user");
			$user->addAttribute("id", $id);
			$user->addChild("firstname",$fname);
			$user->addChild("lastname",$lname);
		
			$user->addChild("gender",$gender);
			$user->addChild("course",$enrolledcourse);
			$user->addChild("section",$section);
			$user->addChild("email",$email);
	
			
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("xml/student_data.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>