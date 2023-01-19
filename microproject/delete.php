
<?php
include 'dbconnect.php';
$var=$_GET["uid"];
//echo $var;
$sqlinsert="SELECT * FROM `student` WHERE sid=$var";
$result=mysqli_query($con,$sqlinsert);
$row=mysqli_fetch_array($result);
$url=$row["photo"];
echo $url;
unlink('uploads/'.$url);








$sql="DELETE FROM `student` WHERE `sid`='$var'";
mysqli_query($con,$sql);
		header("location:view.php");

?>