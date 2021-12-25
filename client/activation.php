<?php include('server.php') ?>

<?php 
	$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" type="image/png" href="sra.png">

	<link rel="stylesheet" href="styl.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</style>
<title>Client Status</title>
</head>
<body>

<div class="uselo">	<i class="logo1 fas fa-user-circle"><span><h1>Hello,<?php echo $username; ?></h1></span></i>
</div>
<section id="sidemenu">
	<img id="logo" src="sra.png">
	<nav>
		<a href="prospect.php"><i class="fa fa-dashboard"></i> Prospects</a>
	    <a href="dash.php"><i class="fas fa-shield-alt"></i> Dashboard</a>
      <a href="invoice.php"><i class="fas fa-users"></i>Invoices</a>
	    <a href="Activation.php"><i class="far fa-file-alt"></i>Activation</a>

	</nav>
	
</section>

<section style="margin-top: -655px;">
		<div id="panelbar">Status <span style="color: #46494d;">/Overview</span></div>
</section>

<?php 
 $sql5="SELECT status FROM client WHERE username='$username';";
 $result5=mysqli_query($con,$sql5);
 $row=mysqli_fetch_array($result5);
 ?>
<h1 style="color: #17ba17;margin-left: 326px;"><?php 
if ($row['status']==1) {
 	echo "$username"." is currently Active";
 }
 ?></h1>
    <?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 73%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</html>