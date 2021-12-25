<?php include('server.php') ?>
<?php 
$timezone=date_default_timezone_set("Asia/Kolkata");
$con=mysqli_connect("localhost","root","","clicks");
if (mysqli_connect_errno())
 {
       echo "failed to connect:".mysqli_connect_errno();
 }
$username=$_SESSION['username'];
echo $username;
$query=mysqli_query($con,"SELECT * FROM invoice WHERE user='$username';");
$rowcount=mysqli_num_rows($con,$query);
?>

<table border="1">
<tr>
<td>download</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query);

?>
<tr>
	<?php echo $row["upload"];?>
<td><a href="uploads/<?php echo $row["upload"]?>"><?php echo $row["upload"] ?></a></td>

</tr>

<?php	
}

?>
</table>