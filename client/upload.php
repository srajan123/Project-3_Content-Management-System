<?php 
session_start();
$timezone=date_default_timezone_set("Asia/Kolkata");
$con=mysqli_connect("localhost","root","","clicks");
if (mysqli_connect_errno())
 {
       echo "failed to connect:".mysqli_connect_errno();
}

if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="uploads/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	echo $file;
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 mysqli_query($con,"INSERT INTO survey(upload) VALUES('$file');");
	
	
}
}

?>


<form enctype="multipart/form-data" method="post">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form>