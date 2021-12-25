<?php 
include('db.php');
  ?>
   <?php 

  $sql="SELECT DISTINCT username FROM client ;";
  $res=mysqli_query($con,$sql);
  
?>
<?php 
if (isset($_POST['passr'])) {
  $user=$_POST['user'];
$query="SELECT * FROM client WHERE username='$user';";
$fire=mysqli_query($con,$query);
$row=mysqli_fetch_array($fire);
echo '<span style="position: absolute;z-index: 10;top: 57%;left: 23%;">'.$row['password'].'</span>';
}
 ?>

 <!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="sra.png">

	<link rel="stylesheet" href="styl.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Retrieve Password</title>
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
	<div id="panelbar">Retrieve<span style="color: #46494d;"> / Password</span></div>
  <form style="position: absolute;z-index: 10;left: 23%;" action="pass.php" method="post">
 <select name="user">
<?php while ($row=mysqli_fetch_array($res)) { ?>
<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
  <?php } ?>
  </select> 
  <button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;border-radius: 5px;" type="submit" name="passr">Get Client Password</button> 
</form>
<h5 style="    text-decoration: underline;
    position: absolute;
    left: 23%;
    color: #2893df;
    font-size: 23px;
z-index: 11;top: 44%;">Password:<br></h5><br>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
</body>
</body>
</html>