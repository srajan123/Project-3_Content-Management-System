<?php include('server.php') ?>

<?php 
$rajan='';
$year='';
$srajan='';

 if (isset($_POST['click'])) {
 	$year=$_POST['year'];
	$rajan=$_POST['use'];	
 }
 ?>

 <?php
 	$username='';
  $username=$_SESSION['username']; 
 ?>


 <?php 
$sql="SELECT DISTINCT month FROM invoice;";
$res=mysqli_query($con,$sql);	
?>


 <?php
$sql1="SELECT * FROM invoice WHERE user='$username' AND month='$rajan' AND Year='$year';";
$res1=mysqli_query($con,$sql1);
?>


<?php while ($row=mysqli_fetch_array($res1)) { ?>
	<u><h2 style="position: absolute;color: #1755c7;left: 22%;z-index: 10;top: 28%;font-family: 'Quicksand-Regular';">Click to Download Invoice:</h2></u>
<a style="position: absolute;z-index: 10;top: 50%;left: 47%;
" href="uploads/<?php echo $row["upload"]?>"><?php echo $row["upload"]; ?></a>
<?php } ?>


	<!DOCTYPE html>
	<html>
	<head>
			<link rel="shortcut icon" type="image/png" href="sra.png">

		<link rel="stylesheet" href="styl.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Client Invoice</title>
	</head>
	<body>
		<form style="margin-top: -2px;position: absolute;z-index: 10;left: 48%;top: 13%;" action="invoice.php" method="post">
<select name="use">
	<option name="January">January</option>
	<option name="February">February</option>
	<option name="March">March</option>
	<option name="April">April</option>
	<option name="May">May</option>
	<option name="June">June</option>
	<option name="July">July</option>
	<option name="August">August</option>
	<option name="September">September</option>
	<option name="October">October</option>
	<option name="November">November</option>
	<option name="December">December</option>
	</select>
	<select name="year">
		<?php for ($i=2018; $i <=2050 ; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
	</select>


 		<button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;border-radius:3px;" name="click" type="submit">Show record</button>

	</form>
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
	<div id="panelbar">Download <span style="color: #46494d;">Invoice</span></div>
	   <?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 73%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
	</body>
	</html>
