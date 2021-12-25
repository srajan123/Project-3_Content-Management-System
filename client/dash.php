<?php
include('database_connection.php');
$username=$_SESSION['username'];

  ?>
<?php
$fromm='';
$too='';
$sql101="SELECT * FROM kobupload WHERE user='$username';";
$pes=mysqli_query($con,$sql101);
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

  $sql33="SELECT DISTINCT username FROM client ;";
  $res33=mysqli_query($con,$sql33);
  
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

<div style="height: 30%;width: 470px;position: absolute;z-index: 11;top: 65%;left: 44%;overflow-y: scroll;">
  <table border="1" style="position: absolute;top: 2%;left: 9%;">

  <tr>
    <th style="text-align: center;">From</th>
    <th style="text-align: center;">Upto</th>
    <th style="text-align: center;">Links</th>

  </tr>
  <?php while($row101=mysqli_fetch_assoc($pes)) { ?>
    <tr>
      <?php
       $newDaoo = date("d-M-y", strtotime($row101['fromd']));
        $newDaoo1 = date("d-M-y", strtotime($row101['upto']));
      ?>
      <td style="text-align: center;"><?php echo $newDaoo; ?></td>
      <td style="text-align: center;"><?php echo $newDaoo1; ?></td>
          <td style="text-align: center;"><a href="uploads/<?php echo $row101["kobupload"]?>"><?php echo $row101["kobupload"]; ?></a></td>
         </tr> 
      
  <?php } ?>
</table>

</div>

 <!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="shortcut icon" type="image/png" href="sra.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="sra.png">

  <title>Client Dashboard</title>
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
 <form style="margin-top: -2px;position: absolute;z-index: 10;left: 42%;top: 14%;" action="dash.php" method="post"> 
   <input type="text" class="datepicker" name="from" placeholder="Select starting date">
   <input type="text" class="datepicker" name="to" placeholder="Select end date">

    <button style="background-image: linear-gradient(to right,#65dbba,#78b6ff);border:none;color: black;border-radius: 5px;" name="click" type="submit">Show record</button>
  </form>

  <?php 
  $from='';
  $to='';
  if (isset($_POST['click'])) {

  $from=$_POST['from'];
  $to=$_POST['to'];
  
}
  
 $sql3="SELECT DISTINCT * FROM kob WHERE  user='$username' AND  First_open_date BETWEEN '$from' AND '$to';";
 $result3=mysqli_query($con,$sql3);
 $check3=mysqli_num_rows($result3);
 ?>

<?php 
 $sql2="SELECT DISTINCT * FROM kob WHERE First_reply_date BETWEEN '$from' AND '$to' AND user='$username';";
 $result2=mysqli_query($con,$sql2);
 $check2=mysqli_num_rows($result2);
 ?>


  <?php 
 $sql="SELECT DISTINCT * FROM kob WHERE First_click_date BETWEEN '$from' AND '$to' AND user='$username';";
 $result=mysqli_query($con,$sql);
 $check=mysqli_num_rows($result);
 
 ?>


  <?php 
 $sql4="SELECT DISTINCT * FROM kob WHERE Bounce_date BETWEEN '$from' AND '$to' AND user='$username';";
 $result4=mysqli_query($con,$sql4);
 $check4=mysqli_num_rows($result4);
 
 ?>

<?php 
 $and='';
 $row221='';
 $sql6="SELECT DISTINCT * FROM leads WHERE user='$username' AND fdate BETWEEN '$from' AND '$to' AND tdate BETWEEN '$from' AND '$to';";
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
 $sql7="SELECT DISTINCT Email FROM kob WHERE user='$username' AND  First_send_date BETWEEN '$from' AND '$to';";
 $result7=mysqli_query($con,$sql7);
 $check7=mysqli_num_rows($result7);
 
 ?>
  <div class="uselo"> <i class="logo1 fas fa-user-circle"><span><h1>Hello,<?php echo $username; ?></h1></span></i>
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


  <section> <div style="position: absolute;top: 55%;" id="panelbar">Export <span style="color: #46494d;">/ File</span></div>

</section>

  <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
<p> <a href="index.php?logout='1'" style="position: absolute;left: 73%;z-index: 10;font-size: 16px;color: #c7c7c7;font-weight: 500;top:2%;"><i class="fas fa-sign-out-alt"></i>logout</a> </p>
    <?php endif ?>
</body>
</body>
</html>