<?php

	$username="";
	$password="";
	$err_username="";
	$err_password="";
	$invalid_info="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 6){
			$err_password="*Password must be 6 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			$xml=simplexml_load_file("xml/uni.xml");
			$users = $xml->user;
			$flag=false;
			foreach($users as $user){
				if($user->uname == $username && $user->pass== $password){
					$flag = true;
					setcookie("username",$username,time() + 10000);
				}
			}
			if($flag){
				header("Location: dashboard.php");
			}else{
				$invalid_info="Username or Password is Incorrect";
			}
		}
	}
?>
<html>
	<head>
		<title>Login</title>
		<style>
			body{
				background-color:white;
				margin:0;
				padding:0;
				font-family: sens-serif;
				
			}
			.box{
				width: 300px;
				padding: 40px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background:lightblue;
				text-align: center;
                border-radius: 10px;
			}
            .box h1{
                color: black;
                text-transform: uppercase;
                font-weight: 500;
            }
            .box input[type = "text"], .box input[type = "password"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid black;
                padding: 14px 10px;
                width: 200px;
                outline: none;
                color: black;
                border-radius: 24px;
                transition: 0.25s;
            }
            .box input[type = "text"]:focus, .box input[type = "password"]:focus{
                width:280px;
                border-color:black;
 
            }
            .box input[type="submit"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid black;
                padding: 14px 40px;
                outline: none;
                color: black;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer;
            }
            .box input[type="submit"]:hover{
                background: skyblue;
            }
		</style>
	</head>
	<body>
		<form class="box" action="" method="post">
			<a href="index.php"><img src="img/logo.png" width="60" title="Eastern Prime University" alt="Eastern Prime University"></a>
			<h1>Login</h1>
			<p style="color:#ee5253;"><?php echo $invalid_info;?></p>
			<input type="text" name="username" value="<?php echo $username;?>" placeholder="Username">
			<p style="color:white;"><?php echo $err_username;?></p>
			<input type="password" name="password"  value="<?php echo $password;?>" placeholder="Password">
			<p style="color:white;"><?php echo $err_password;?></p>
			<input type="submit" name="login" value="Login">
		</form>
	</body>
</html>
