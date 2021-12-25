<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" type="image/png" href="sra.png">

	<title>Login Panel</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $(".ani").fadeIn(1)

                $(".mat").fadeOut(1)

                $(".mat").fadeIn(1000)
                $(".mat").fadeOut(1000)

       
    });
</script>
<script>
$(document).ready(function(){
        $(".ani").fadeOut(4000)
       
    });
</script>
</head>
<body>
	<div class="ani" style="background-size: cover;background-color: #302d43;width: 1552px;
    height: 758px;left: -8px;position: absolute;z-index: 10000;top: -4px;">
    <img class="mat" style="position: absolute;z-index: 20000;top: 44%;width: 191px;left: 44%;
" src="sra.png"></div>
<form  action="index.php" method="post">
	<button class="mat" type="submit" name="continue">continue</button>

</form>

<img id="uni" src="design.png">
	<div class="header">
		<img  src="sra.png">
	</div>
	
	<form style="padding-right: 187px;height: 200px;width: 127px;" class="forum" method="post" action="index.php">

		<?php include('errors.php'); ?>
<div id="sp" style="width: 331px;box-sizing: border-box;text-align: center;">Login Panel</div>

		
			<input style="position: absolute;left: 35px;" type="text" name="username"  placeholder="Username"><br>
		
			<input style="position: absolute;left: 35px;margin-top: 50px;" type="password" name="password" placeholder="Password"><br>

			<center><button style="position: absolute;left: 42px;z-index: 10;padding-right: 30px;padding-left: 30px;top: 218px;" type="submit" name="login_user">Login</button></center>
			
	</form>

</body>
</html>