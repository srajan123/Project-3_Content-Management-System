<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" type="image/png" href="sra.png">
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<img id="uni" src="design.png">
	<div class="header">
		<img  src="sra.png">
	</div>
	
	<form style="padding-right: 187px;height: 200px;width: 127px;" class="forum" method="post" action="index.php">

		<?php include('errors.php'); ?>
<div id="sp" style="width: 331px;box-sizing: border-box;text-align: center;">Admin Panel</div>

		
			<input style="position: absolute;left: 35px;" type="text" name="username"  placeholder="Username"><br>
		
			<input style="position: absolute;left: 35px;margin-top: 50px;" type="password" name="password" placeholder="Password"><br>

			<center><button style="position: absolute;left: 42px;z-index: 10;padding-right: 30px;padding-left: 30px;top: 218px;" type="submit" name="login_user">Login</button></center>
			
	</form>
<p style="text-align: center;color: #65bdc6;left: 58%;padding-right: 277px;font-size: 21px;position: absolute;top: 35px;z-index: 2;font-family: 'Quicksand-Regular';"><a  href="register.php" style=" margin-left: 39px;margin-top: -1px;color:black;position: absolute;z-index: 2;color: white;">Add a Comapny</a>
</body>
</html>