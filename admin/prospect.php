
<?php 
include('db.php');
$rajan='';
$srajan='';
$year='';
if (isset($_POST['click'])) {
	$rajan=$_POST['use'];	
	$srajan=$_POST['user'];	
	$year=$_POST['year'];
}
$query="SELECT * FROM prospect WHERE Client='$srajan' AND Month='$rajan' AND Year='$year' AND First_Name!='First Name';";
$result=mysqli_query($con,$query);

 ?>

<?php 

	$sql="SELECT DISTINCT username FROM client ;";
	$res=mysqli_query($con,$sql);
	
?>
<?php 

	$sqls="SELECT DISTINCT username FROM client ;";
	$ress=mysqli_query($con,$sqls);
	
?>	

<?php  
if(isset($_POST["submit"]))
{
	$client=$_POST['users'];
	$years=$_POST['years'];
	$months=$_POST['month'];
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
  
    $item1 = mysqli_real_escape_string($con, $data[0]);
    $item2 = mysqli_real_escape_string($con, $data[1]);  
    $item3 = mysqli_real_escape_string($con, $data[2]);  
    $item4 = mysqli_real_escape_string($con, $data[3]);  
    $item5 = mysqli_real_escape_string($con, $data[4]);  
    $item6 = mysqli_real_escape_string($con, $data[5]);  
    $item7 = mysqli_real_escape_string($con, $data[6]);  
    $item8= mysqli_real_escape_string($con, $data[7]); 
    $item9= $months;
    $item10= $years;
    $item11= $client; 
  


$query = "INSERT into prospect(Email,First_Name,Last_Name,Linkedin_URL	,Designation,Company,Company_Website,City,Month,Year,Client)
 values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11')";
                mysqli_query($con, $query);
   }
   fclose($handle);
  }
 }
header("location: prospect.php");
}
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
	<title>prospect</title>
	
</head>
<body>

<form style="margin-top: -2px;position: absolute;z-index: 10;left: 48%;top: 13%;" action="prospect.php" method="post">
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
<?php while ($row=mysqli_fetch_array($res)) { ?>
<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
	<?php } ?>
	</select>
	<select name="year">
		<?php for ($i=2018; $i <=2050 ; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
	</select>
 		<button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;" name="click" type="submit">Show record</button>

	</form>


<div class="uselo">	<i class="logo1 fas fa-user-circle"><span><h1>Hello,Admin</h1></span></i>
</div>
<section id="sidemenu" style="height: 900px;">
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
<div style="margin-top: -821px;width: 100px;height: 100px;">
<div style="width: 1000px;" id="panelbar">Prospect <span style="color: #46494d;">/ Overview</span></div>
<div style="height: 500px;width: 1012px;overflow: scroll;margin-left: 320px;">
	
	<table border="1px" align="center" style=" border-collapse: collapse; font-family:'Quicksand-Bold';width: 700px;line-height: 60px;">
	<tr>
		
	</tr>
	<tr style="background-color: #dfdff6;font-family: 'Quicksand-Regular';">
		<th style="text-align: center;padding-left: 30px;padding-right: 30px;">Email</th>
		<th style="text-align: center;padding-left: 25px;padding-right: 25px;">First_Name</th>
		<th style="text-align: center;padding-left: 25px;padding-right: 25px;">Last_Name</th>
		<th style="text-align: center;text-align: center;padding-left: 75px;padding-right: 75px;">Designation</th>
		<th style="text-align: center;padding-left: 75px;padding-right: 75px;">Company</th>
	    <th style="text-align: center;padding-left: 25px;padding-right: 25px;">Linkedin_URL</th>
		<th style="text-align: center;padding-left: 25px;padding-right: 25px;">Company_Website</th>
		<th style="text-align: center;padding-left: 30px;padding-right: 30px;">City</th>
		<th style="text-align: center;padding-left: 30px;padding-right: 30px;">Month</th>
		<th style="text-align: center;padding-left: 30px;padding-right: 30px;">Client</th>

		<th style="text-align: center;padding-left: 30px;padding-right: 30px;">Year</th>

	</tr>
	<?php while($rows=mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td align="center"><?php echo $rows['Email']; ?></td>
         	<td align="center"><?php echo $rows['First_Name']; ?></td>
         	<td align="center"><?php echo $rows['Last_Name']; ?></td>
         	<td align="center"><?php echo $rows['Designation']; ?></td>
         	<td align="center"><?php echo $rows['Company']; ?></td>
            <td align="center"><?php echo $rows['Linkedin_URL']; ?></td>
         	<td align="center"><?php echo $rows['Company_Website']; ?></td>
         	<td align="center"><?php echo $rows['City']; ?></td>
         	<td align="center"><?php $rew=$rows['Month']; echo $rew; ?></td>
          	<td align="center"><?php echo $rows['Client']; ?></td>
         	<td align="center"><?php echo $rows['Year']; ?></td>



		</tr>
	<?php } ?>
</table>
</div>
<div style="width: 1000px;" id="panelbar" style="margin-top: 20px;">Upload<span style="color: #46494d;">Prospect CSV</span></div>

<form method="post" enctype="multipart/form-data" style="position: absolute;left: 22%;">
   <div align="center">  
    <label style="width: 144px;">Select CSV File:</label>
    <select name="month">
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
		<select name="users">
<?php while ($row007=mysqli_fetch_array($ress)) { ?>
<option value="<?php echo $row007['username']; ?>"><?php echo $row007['username']; ?></option>
	<?php } ?>
	</select>
	<select name="years">
		<?php for ($i=2018; $i <=2050 ; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
	</select>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="grad" />
   </div>
  </form>
  <?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</html>
</div>
