<?php 
session_start();
$timezone=date_default_timezone_set("Asia/Kolkata");
$con=mysqli_connect("localhost","root","","clicks");
if (mysqli_connect_errno())
 {
       echo "failed to connect:".mysqli_connect_errno();
}

$query=mysqli_query($con,"select * from survey");
$rowcount=mysqli_num_rows($query);
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