<?php include 'server.php' ?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" type="image/png" href="sra.png">

	<title>Register Company</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<img id="uni" src="design.png">
	<div class="header">
		<img  src="sra.png">
	</div>
	
	<form style="padding-right: 62px;height: 46%;" class="forum" method="post" action="register.php">

		<?php include('errors.php'); ?>
<label id="sp" style="padding-right: 65px;">Admin Panel</label>
		
			<input type="text" name="username" placeholder="Company Name" value="<?php echo $username; ?>"><br>
		
		
			<input type="email" name="email" placeholder="Company Email ID "value="<?php echo $email; ?>"><br>
		
		
			<input type="password" placeholder="Company Password" name="password_1"><br>
		
			<input type="password" placeholder="Confirm Password" name="password_2"><br>
		
			<button style="top:337px;" type="submit"  name="reg_user">Add Company</button>
		</form>
		<p style="text-align: center;color: #65bdc6;left: 70%;padding-right: 82px;font-size: 21px;position: absolute;top: 40px;z-index: 2; font-family: 'Quicksand-Regular';">
			Login as Admin? <a href="index.php" style="color:black;position: absolute;z-index: 2;color: white;margin-top: -25px;margin-left: 95px;">Sign in</a>
		</p>
	
</body>
</html>