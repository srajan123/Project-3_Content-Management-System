
<?php 
include('db.php');

if(isset($_POST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="../client/uploads/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);	
}
$rajan=$_POST['use'];	
	$srajan=$_POST['user'];
	$year=$_POST['year'];
	mysqli_query($con,"INSERT INTO invoice(upload,month,user,Year) VALUES('$file','$rajan','$srajan','$year');");
	
}

?>
<?php 
$sql1="SELECT DISTINCT Month FROM prospect;";
	$res1=mysqli_query($con,$sql1);
	$sql="SELECT DISTINCT username FROM client;";
	$res=mysqli_query($con,$sql);
	
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
	<title>invoice</title>
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
	<div id="panelbar">Upload<span style="color: #46494d;"> Invoice</span></div>
<form enctype="multipart/form-data" method="post" style="position: absolute;right: 43%;">
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


		<select name="user">
<?php while ($row=mysqli_fetch_array($res)) { ?>
<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
	<?php } ?>
	</select>
<br>
File Upload:<input type="file" name="file" style="margin-top: 330px;">
<button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;padding: 7px;font-size: 17px;padding-right: 50px;border-radius: 5px;padding-left: 50px;" type="submit" name="submit" value="upload">Upload</button>

</form>
<?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</html>
