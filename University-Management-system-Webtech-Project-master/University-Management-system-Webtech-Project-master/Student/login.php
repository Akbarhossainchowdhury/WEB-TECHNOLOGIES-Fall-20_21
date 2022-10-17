<?php include_once "validation/validation-login.php" ;?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/login-style.css" />
	</head>
	<body>
		<form class="box" action="" method="post" onsubmit="return LoginValidation()">
			<a href=""><img src="resources/logo.png" width="60" title="Eastern Prime University" alt="Eastern Prime University"></a>
			<h1>Login</h1>
			<p style="color:#ee5253;"><?php echo $invalid_info;?></p>
			<input type="text" name="studentid" value="<?php echo $studentid;?>" placeholder="Student ID">
			<p style="color:#ee5253;"><?php echo $err_studentid;?></p>
			<input type="password" name="password"  value="<?php echo $password;?>" placeholder="Password">
			<p style="color:#ee5253;"><?php echo $err_password;?></p>
			<input type="submit" name="login" value="Login">
		</form>
		<script src="scripts/script.js"></script>
	</body>
</html>