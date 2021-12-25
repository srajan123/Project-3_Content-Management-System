<?php 
include('db.php');
  ?>
  <?php 

  $sql="SELECT DISTINCT username FROM client ;";
  $res=mysqli_query($con,$sql);
?>
 <?php 

  $sql1="SELECT DISTINCT username FROM client ;";
  $res1=mysqli_query($con,$sql1);
?>
 <?php 

  $sql101="SELECT DISTINCT username FROM client ;";
  $res101=mysqli_query($con,$sql101);
?>
<?php 
	$from='';
	$to='';
  $srajan='';
	if (isset($_POST['click'])) {

  $srajan=$_POST['user']; 
  $from=$_POST['from'];
  $to=$_POST['to'];
  
  
}
 $sql3="DELETE FROM kob WHERE  user='$srajan' AND  Added_date BETWEEN '$from' AND '$to';";
 $result3=mysqli_query($con,$sql3);
 $sql303="DELETE FROM kobupload WHERE  user='$srajan' AND  fromd='$from' AND upto='$to';";
  $result303=mysqli_query($con,$sql303);


 ?>
 <?php 
	$use1='';
	$user1='';
  $year1='';
	if (isset($_POST['invoice'])) {
  $use1=$_POST['use1'];
  $user1=$_POST['user1'];
  $year1=$_POST['year1'];
 
}

 $sql34="DELETE FROM invoice WHERE  user='$user1' AND month='$use1' AND Year='$year1';";
 $resultqwerty=mysqli_query($con,$sql34);

 ?>
<?php 	
if (isset($_POST['pros'])) {
  $use=$_POST['use']; 
  $user=$_POST['user'];
  $year=$_POST['year'];
 $sql4="DELETE FROM prospect WHERE  Client='$user' AND Month='$use' AND Year='$year';";
 $result4=mysqli_query($con,$sql4);
}
 ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Delete</title>
  	<link rel="shortcut icon" type="image/png" href="sra.png">
<link rel="stylesheet" type="text/css" href="styl.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
  } );
  </script>
  </head>
  <body>
  <div class="uselo">	<i class="logo1 fas fa-user-circle"><span><h1>Hello,Admin</h1></span></i>
</div>
<section id="sidemenu">
	<img id="logo" src="sra.png">
	<nav>
		<a href="prospect.php"><i class="fa fa-dashboard"></i> Prospects</a>
	    <a href="dashboard.php"><i class="fas fa-shield-alt"></i> Dashboard</a>
        <a href="invoice.php"><i class="fas fa-users"></i>Invoices</a>
	    <a href="Activation.php"><i class="far fa-file-alt"></i>Activation</a>
        <a href="leads.php"><i class="fas fa-tasks"></i>Leads</a>
        <a href="pass.php"><i class="fas fa-key"></i>User Password</a>
        <a href="delete.php"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>      

	</nav>
	
</section>
<section style="margin-top: -655px;">
	<div id="panelbar">Delete<span style="color: #46494d;"> Records</span></div>
<h3 style="position: absolute;color: #025f7e;left: 23%;text-decoration: underline;font-family: 'Quicksand-Regular';">Delete Dashboard File Records :-</h3>
<h3 style="position: absolute;color: #025f7e;left: 23%;top:47%;text-decoration: underline;font-family: 'Quicksand-Regular';">Delete Prospect File Records :-</h3>
<h3 style="position: absolute;color: #025f7e;left: 23%;top:72%;text-decoration: underline;font-family: 'Quicksand-Regular';">Delete PDF & Invoices :-</h3>

	 <form style="margin-top: -2px;position: absolute;z-index: 10;left: 23%;
    top: 35%;" action="delete.php" method="post"> 
		 	 <input type="text" class="datepicker" name="from" placeholder="Select starting date">
		 	 <input type="text" class="datepicker" name="to" placeholder="Select end date">

		    <select name="user">
		<?php while ($row=mysqli_fetch_array($res)) { ?>
		<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
		  <?php } ?>
		  </select>
		    <button style="background-image: linear-gradient(to right,#e9babd,#ed5858);border:none;color: black;border-radius: 3px;" name="click" type="submit">Delete</button>
  </form>





<form style="margin-top: -2px;position: absolute;z-index: 10;    left: 23%;
    top: 60%;" action="delete.php" method="post">
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



		<select name="user">
<?php while ($row1=mysqli_fetch_array($res1)) { ?>
<option value="<?php echo $row1['username']; ?>"><?php echo $row1['username']; ?></option>
	<?php } ?>
	</select>
	<select name="year">
		<?php for ($i=2018; $i <=2050 ; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
	</select>
 		<button style="background-image: linear-gradient(to right,#e9babd,#ed5858);border:none;color: black;border-radius: 3px;" name="pros" type="submit">Delete</button>

	</form>


<form style="margin-top: -2px;position: absolute;z-index: 10;    left: 23%;
    top: 86%;" action="delete.php" method="post">

<select name="use1">
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



		<select name="user1">
<?php while ($row1010=mysqli_fetch_array($res101)) { ?>
<option value="<?php echo $row1010['username']; ?>"><?php echo $row1010['username']; ?></option>
	<?php } ?>
	</select>
	<select name="year1">
		<?php for ($i=2018; $i <=2050 ; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
	</select>
 		<button style="background-image: linear-gradient(to right,#e9babd,#ed5858);border:none;color: black;border-radius: 3px;" name="invoice" type="submit">Delete</button>

	</form>
  	<?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
  </body>
  </html>