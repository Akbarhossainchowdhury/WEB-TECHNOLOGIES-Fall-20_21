<?php
	$name = "";
	$err_name = "";
	$user_name = "";
	$err_user_name = "";
	$password = "";
	$err_password = "";
	$confirm_password = "";
	$err_confirm_password = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
	$address_street = "";
	$address_city = "";
	$address_state ="";
	$address_zip ="";
	$err_address ="";
	$birth_day ="";
	$birth_month ="";
	$birth_year ="";
	$err_birth_date ="";
	$gender ="";
	$err_gender ="";
	$sources = "";
	$err_sources = "";
	$bio = "";
	$err_bio = "";
	$fillAll=true;
	
	if(isset($_POST["register"]))
	{
		
		if(empty($_POST["name"]))
		{
			$err_name = "*required name";
			$fillAll=false;
		}
		else{ $name = htmlspecialchars($_POST["name"]);}
		
		
		if(empty($_POST["userName"]))
		{
			$err_user_name = "*required user name";
			$fillAll=false;
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_user_name = "*at least 6 char required";
			$fillAll=false;
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_user_name = "*no space is allowed";
			$fillAll=false;
		}
		else{ $user_name = htmlspecialchars($_POST["userName"]);}
		
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{

								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{$err_password = "*atleast one special character # or ? is required";$fillAll=false;}
					}
					else{$err_password = "*atleast one digit is required";$fillAll=false;}
				}
				else{$err_password = "*upper and lower case character required";$fillAll=false;}
			}
			else{$err_password = "*minimum password length is 8";$fillAll=false;}
		}
		else{$err_password = "*password required";$fillAll=false;}

		if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched";
			$fillAll=false;
		}
		
		
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
			$fillAll=false;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";$fillAll=false;}
		}
		

		
		if(empty($_POST["phone"]))
		{
			$err_phone = "*required number";
			$fillAll=false;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = "*required numeric charecter";
			$fillAll=false;
		}
		else{ $phone_no = htmlspecialchars($_POST["phone"]);}
		
		
		
		if(!isset($_POST["city"]))
		{
			$err_address = "*required street, city state and zip code";
			$fillAll=false;
		}
		else{ $address_city = htmlspecialchars($_POST["city"]);}
		
		
		
		if(isset($_POST["day"]))
		{
			$birth_day = $_POST["day"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		if(isset($_POST["month"]))
		{
			$birth_month = $_POST["month"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		if(isset($_POST["year"]))
		{
			$birth_year = $_POST["year"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required";$fillAll=false;}
		
		
		
		if(isset($_POST["sources"]))
		{
			$sources = $_POST["sources"];
		}
		else{$err_sources = "*sources required";}
		
		
		
		if(!empty($_POST["bio"]))
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		else{$err_bio = "*bio required";}
		
		if($fillAll==true)
		{
			$users = simplexml_load_file("admin.xml");
			
			$user = $users->addChild("user");
			$user->addChild("name",$name);
			$user->addChild("password",$password);
			$user->addChild("username","$user_name");
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("phone","$phone_no");
			$user->addChild("city",$address_city);
			
			
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("admin.xml","w");
			fwrite($file,$xml->saveXML());
			echo "Registation successfully";
		}
		else{echo "Registation not successful";}
	
?>	
	