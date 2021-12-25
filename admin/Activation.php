<!DOCTYPE html>
<html>
<head>
	<style>
		.h
{
           background-image: linear-gradient(to right,#74ebd5,#acb6e5);
           color: #070707;
  
}

#acti
{
	background-image: linear-gradient(to right,#11998e,#38ef7d);
	border:1px solid white;
}
#de
{
           background-image: linear-gradient(to right,#ed213a,#ff9489);
           	border:1px solid white;


}
	</style>
		<link rel="shortcut icon" type="image/png" href="sra.png">
	<link rel="shortcut icon" type="image/png" href="sra.png">

	<link rel="stylesheet" href="styl.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</style>
<title>Activate and de-activate the account</title>
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
	<div id="panelbar">Activation <span style="color: #46494d;">/ Overview</span></div>
	</section>
<div style="height: 570px;left: 22%;overflow: scroll;width: 60%;position: absolute;">
<table border="1"  style="position: absolute;left: 0%;border-collapse: collapse;font-family:'Quicksand-Regular';">
	<tr>
 <th class="h" style="padding-right: 200px;padding-left: 200px;padding-top: 10px;padding-bottom: 10px;">Details</th> 
 <th class="h" style="padding-right: 200px;padding-left: 200px;padding-top: 10px;padding-bottom: 10px;">Status </th>
	</tr>



<?php 
include('db.php');
$select=mysqli_query($con,"select * from client");
while($row=mysqli_fetch_array($select))
{
$id=$row['id'];
$data=$row['username'];
$status=$row['status'];

?>
<tr>
	<td  class="single" style="text-align: center;padding-bottom: 20px;padding-bottom:20px;font-weight: 700;">
<div> <?php echo $data?> </div>
</td>


<div> 
<?php
if(($status)=='0')
{
?>
	<td  style="text-align: center;padding-bottom: 20px;padding-bottom:20px;">
<button id="de" style="margin-top: 10px;"><a style="text-decoration: none;color: #000;" href="action.php?status=<?php echo $row['id'];?>" class="act" onclick="return confirm('Activate <?php echo $data?>');"> Not Active </a></button>
</td>
</tr>
<?php
}
if(($status)=='1')
{
?>

	<td class="single" style="text-align: center;padding-bottom: 20px;padding-bottom:20px;">
<button id="acti" style="margin-top: 10px;"><a style="padding-right: 15px;padding-left: 15px;text-decoration: none;color:#000;" href="action.php?status=<?php echo $row['id'];?>" class="deact" onclick="return confirm('De-activate <?php echo $data?>');"> Active</a></button>
</td>
</tr>
<?php
}
?>
</div>
<?php }?> 
</table>
</div>
<?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</html>