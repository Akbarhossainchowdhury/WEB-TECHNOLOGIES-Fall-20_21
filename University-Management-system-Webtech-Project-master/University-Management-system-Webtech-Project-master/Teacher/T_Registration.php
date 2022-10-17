 <?php include_once "Php_code/validation_registration.php" ;?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body >
		
		<hr><center>
		<form action="" method="post";">
			<fieldset>
				<h1>Welcome to Teacher's Registration form</h1>
				<table>
					<tr>
						<td align="right">Full Name:</td>
						<td><input type="text" name="name" value="<?php echo $name; ?>"><?php echo $err_name; ?></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="userName" value="<?php echo $user_name; ?>"><?php echo $err_user_name; ?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="confirmPassword" value="<?php echo $password; ?>"><?php echo $err_confirm_password; ?></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td align="right" >contact no:</td>
						<td>
							 <input type="text" placeholder="Number" size="11" name="phone" value="<?php echo $phone_no ?>"><?php echo $err_phone; ?>
						</td>
					</tr>
					<tr>
						<td > Qualification:</td>
						<td>
							<select name ="Qualification">
								<option disabled selected>select one</option>
								<option>Bsc</option>
								<option>Msc</option>
								<option>phd</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td align="right">Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>
					
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form></center>
	</body>
	
</html>