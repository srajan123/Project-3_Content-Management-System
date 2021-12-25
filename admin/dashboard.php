
<?php 
include('db.php');
  ?>

  <?php
  $sql="SELECT DISTINCT username FROM client ;";
  $res11=mysqli_query($con,$sql);
   ?>

<?php 

  $sql="SELECT DISTINCT username FROM client ;";
  $res=mysqli_query($con,$sql);
  
?>
<?php 

  $sql3893="SELECT DISTINCT username FROM client ;";
  $res3893=mysqli_query($con,$sql3893);
  
?>
  <?php 

  $sql33="SELECT DISTINCT username FROM client ;";
  $res33=mysqli_query($con,$sql33);
  
?>
 <?php 

if(isset($_POST["submit"]))
{
	
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {

    $item1 = mysqli_real_escape_string($con, $data[0]);  
    $item3 = mysqli_real_escape_string($con, $data[1]);  
    $item4 = mysqli_real_escape_string($con, $data[2]);  
    $item5 = mysqli_real_escape_string($con, $data[3]);  
    $item6 = mysqli_real_escape_string($con, $data[4]);  
    $item7 = mysqli_real_escape_string($con, $data[5]);  
    $item8 = mysqli_real_escape_string($con, $data[6]);  
    $item10= mysqli_real_escape_string($con, $data[7]);
    $item11= $_POST['user'];

$newDas = date("Y-m-d", strtotime($item4));


$newDao = date("Y-m-d", strtotime($item5));

$newDar = date("Y-m-d", strtotime($item6));

$newDac = date("Y-m-d", strtotime($item7));

$newDab = date("Y-m-d", strtotime($item8));



$query = "INSERT into kob(Email,Name,First_send_date,	First_open_date,First_reply_date,First_click_date,Bounce_date,company_name,user)
 values('$item1','$item3','$newDas','$newDao','$newDar','$newDac','$newDab','$item10','$item11')";
                mysqli_query($con, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
 $file=$_FILES["file"]["name"];
  $tmp_name=$_FILES["file"]["tmp_name"];
  $path="../client/uploads/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];
  $allowed=array("jpg","png","gif","pdf","csv","pdf","zip");
  if(in_array($ext,$allowed))
  {
 move_uploaded_file($tmp_name,$path); 
}
 $srajan=$_POST['user']; 

$qwerty="SELECT DISTINCT First_send_date FROM kob where Email!='Email' order by First_open_date desc;";
  $res=mysqli_query($con,$qwerty);
  $rows=mysqli_fetch_array($res);

  $qwerty1="SELECT DISTINCT First_send_date FROM kob where Email!='Email' order by First_open_date asc;";
  $res1=mysqli_query($con,$qwerty1);
  $rows1=mysqli_fetch_array($res1);
  
 $fire1="INSERT INTO kobupload (fromd,upto,kobupload,user) VALUES('$rows[0]','$rows1[0]','$file','$srajan');";
     $resqq=mysqli_query($con,$fire1);
     header("location:dashboard.php");

}
?>
<?php 
	

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?> 
 <!doctype html>
<html lang="en">
<head>
  <style>
    @font-face
{
  font-family: 'Quicksand-Regular';
  src: url('Quicksand-Regular.otf');
}
body
{
  line-height: 2.5;
}
*
{
  box-sizing: border-box;
}
.logoutsup
{
color: #bfbebe;
    float: right;
    font-weight: 600;
    left: 84%;
    z-index: 10;
    position: absolute;
    margin-top: -46%;
}
.uselo
{
    height: 56px;
    z-index: 1;
    position: absolute;
    width: 100%;
    background-color: #1d1c23;
}
span h1
{
    font-size: 16px;
    margin-left: 46px;
    margin-top: -25px;
    margin-right: 15px;
}
.logo1
{
        color: #bfbebe;
    float: right;
    margin-top: 10px;
    font-size: 32px;
}
#logo
{
    margin-left: 24px;
    margin-bottom: -64px;
    margin-top: 0px;
    position: absolute;
    z-index: 2;
}
body
{
  font-family: 'Quicksand-Regular';
  background: #F4F6F9;

}
#sidemenu{
  background-color: #302d43;
  max-width: 280px;
    height:735px;
}
i
{
    margin-right: 5px;
}

    nav{
      padding-top: 100px;
    }

    section nav a{
        display: block;
        color:#FAF6F9;
        padding: 15px 30px;
      }
        section nav a:hover
        {
            text-decoration-line: none;
            color:#FAF6F9;
        }

        a:focus  {
          background:#282639;
          border-left: 2px solid #92cf48;

        }
    a:focus > i
        {
            color:#92cf48;
        }

section div h6
{
      margin-top: 60px;

}        
.same
{
  
  border-radius: 8px;
  text-align: center;
    padding-top: 6px;
    color: #363232;
    font-family: 'Quicksand-Regular';
    font-size: 80px;
    box-sizing: border-box;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.one
{
       background-image: linear-gradient(to right, #16BFFD , #CB3066);

}
.two
{
       background-image: linear-gradient(to right, #8360c3 , #2ebf91);

}
.three
{
   background-image: linear-gradient(to right, #654ea3 ,#eaafc8);
}
.four
{
     background-image: linear-gradient(to right,#c0c0aa ,#1cefff);

}
#panelbar
{
  text-align: left;
    width: 1178px;
    color: #007bff;
    padding-top: 10px;
    padding-left: 43px;
    margin-left: 322px;
    border-radius: 8px;
    height: 52px;
    margin-bottom: 22px;
    background-color: #e9ecef;
}
.extra
{
    padding-top: 356px;
    padding-left: 307px;
}
.grad
{
         background-image: linear-gradient(to right, #3a7bd5 ,#3a6073);
         border: none;
        padding: 11px;
        text-align: center;
        font-size: 17px;
        margin-top: 61px;
        margin-left: -64px;
        font-weight: 500;
        color: white;
        padding-left: 75px;
        padding-right: 75px;
        border-radius: 8px;
        font-family: 'Quicksand-Regular';

}
canvas
{
    display: block;
    height: 520px;
    width: 520px;
    position: absolute;
    left: 21%;
    top: 30%;
}

  </style>
		<link rel="shortcut icon" type="image/png" href="sra.png">

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
 <form style="margin-top: -2px;position: absolute;z-index: 10;left: 42%;top: 14%;" action="dashboard.php" method="post"> 
 	 <input type="text" class="datepicker" name="from" placeholder="Select starting date">
 	 <input type="text" class="datepicker" name="to" placeholder="Select end date">

    <select name="user">
<?php while ($row=mysqli_fetch_array($res)) { ?>
<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
  <?php } ?>
  </select>
    <button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;border-radius: 5px;" name="click" type="submit">Show record</button>
  </form>

	<?php 
	$from='';
	$to='';
  $srajan='';
	if (isset($_POST['click'])) {

  $srajan=$_POST['user']; 
  $from=$_POST['from'];
  $to=$_POST['to'];
  
}
	
 $sql3="SELECT DISTINCT * FROM kob WHERE  user='$srajan' AND  First_open_date BETWEEN '$from' AND '$to';";
 $result3=mysqli_query($con,$sql3);
 $check3=mysqli_num_rows($result3);
 ?>

<?php 
 $sql2="SELECT DISTINCT * FROM kob WHERE First_reply_date BETWEEN '$from' AND '$to' AND user='$srajan';";
 $result2=mysqli_query($con,$sql2);
 $check2=mysqli_num_rows($result2);
 ?>


	<?php 
 $sql="SELECT DISTINCT * FROM kob WHERE First_click_date BETWEEN '$from' AND '$to' AND user='$srajan';";
 $result=mysqli_query($con,$sql);
 $check=mysqli_num_rows($result);
 
 ?>


  <?php 
 $sql4="SELECT DISTINCT * FROM kob WHERE Bounce_date BETWEEN '$from' AND '$to' AND user='$srajan';";
 $result4=mysqli_query($con,$sql4);
 $check4=mysqli_num_rows($result4);
 
 ?>
 <?php 
 $and='';
 $row221='';
 $sql6="SELECT DISTINCT * FROM leads WHERE user='$srajan' AND fdate BETWEEN '$from' AND '$to' AND tdate BETWEEN '$from' AND '$to';";
 $result6=mysqli_query($con,$sql6); 
 $nums=mysqli_num_rows($result6);
 if ($nums) {
$row221=mysqli_fetch_array($result6);
 }
 else
 {
  $and="0";
 }
 ?>

 <?php 
 $sql7="SELECT DISTINCT Email FROM kob WHERE user='$srajan' AND  First_send_date BETWEEN '$from' AND '$to';";
 $result7=mysqli_query($con,$sql7);
 $check7=mysqli_num_rows($result7);
 
 ?>
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
	<div id="panelbar">Dashboard<span style="color: #46494d;">/Overview</span></div>
	
<div class="same one" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px;"><?php echo $check4; ?></span><br><h6 style="font-size:20px;">Total Bounce</h6></div>

<div class="same three" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px;"><?php echo $check; ?></span><br><h6 style="font-size:20px;">User Click</h6></div>
 <div class="same four" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px;"><?php if($nums) { echo $row221['leads']; }
    else 
      {
        echo $and;
        } ?></span><br><h6 style="font-size:20px;">Leads</h6></div>
    <div class="same one" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px;"><?php echo $check2; ?></span><br><h6 style="font-size:20px;">User Replied</h6></div>
    <div class="same two" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px;"><?php echo $check3; ?></span><br><h6 style="font-size:20px;">Opened by users</h6></div>
 <div class="same four" style="float: right;margin-right:30px;  height:140px;
    width: 140px;"><span style="font-size: 55px"><?php echo $check7; ?></span></span><br><h6 style="font-size:20px;">Unique Emails Sent</h6></div>

</section>


<!--new section -->
	 <div class="extra"><div id="panelbar" style="float: left;margin-left: 15px;margin-top: -36px;">Upload <span style="color: #46494d;">CSV</span></div>
</div>
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <br>

   <select name="user">
<?php while ($row3893=mysqli_fetch_array($res3893)) { ?>
<option value="<?php echo $row3893['username']; ?>"><?php echo $row3893['username']; ?></option>
  <?php } ?>
  </select>

    <input type="file" name="file" />
    <br/>

    <input type="submit" name="submit" value="Import" class="grad" />
   </div>
  </form>




  <!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 83%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</body>
</html>