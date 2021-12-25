
<?php 
include('db.php');
$user='';
$leads='';
$from='';
$upptoo='';
if (isset($_POST['lead'])) {
        $from=$_POST['from'];
        $upptoo=$_POST['upptoo'];
        $user=$_POST['user'];
        $leads=$_POST['leads'];
}
 $fire="SELECT * FROM leads WHERE user='$user';";
$query=mysqli_query($con,$fire);
$count=mysqli_num_rows($query);
 if ($count>0) {

  $fire47="UPDATE leads SET leads='$leads',fdate='$from',tdate='$upptoo' WHERE user='$user';";
  $req=mysqli_query($con,$fire47);
echo '<span style="color: #1eae23;position: absolute;font-size: 35px;top: 23%;z-index: 10;left: 23%;">Lead successfully Updated .</span>';
}
else
{
$fire11="INSERT INTO leads(leads,fdate,tdate,user) VALUES('$leads','$from','$upptoo','$user');";
$runq=mysqli_query($con,$fire11);
echo '<span style="color: #1eae23;position: absolute;font-size: 35px;top: 23%;z-index: 10;left: 23%;">New Lead Inserted .</span>';
}
  ?>
   <?php 

  $sql="SELECT DISTINCT username FROM client ;";
  $res=mysqli_query($con,$sql);
  
?>
  <!doctype html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="image/png" href="sra.png">
  <link rel="stylesheet" href="styl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  	<link rel="shortcut icon" type="image/png" href="sra.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="uselo"> <i class="logo1 fas fa-user-circle"><span><h1>Hello,Admin</h1></span></i>
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
  <div id="panelbar">Insert<span style="color: #46494d;"> / Leads</span></div>
 <form style="margin-top: -2px;position: absolute;z-index: 10;left: 42%;top: 12%;" action="leads.php" method="post"> 
   <input type="text" class="datepicker" name="from" placeholder="Select starting date">
       <input type="text" class="datepicker" name="upptoo" placeholder="Select end date">
    <select name="user">
<?php while ($row=mysqli_fetch_array($res)) { ?>
<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
  <?php } ?>
  </select>
  <input type="text" name="leads">
    <button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;border-radius: 5px;" name="lead" type="submit">Insert Leads</button>
  </form>
  <?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</html>