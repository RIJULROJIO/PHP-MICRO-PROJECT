
<?php
include 'dbconnect.php';
$var=$_GET["uid"];
$sql="SELECT * FROM `student` WHERE sid=$var";
$result=mysqli_query($con,$sql);

	  
      if(isset($_POST['REGISTER']))
    {
        $name=$_POST["name"];
		
		$address=$_POST["address"];
		$mobno=$_POST["mobno"];

		$gender=$_POST["gender"];
		$course=$_POST["course"];
		$i=$_FILES["img"]["name"];
			$path = $_FILES['img']['tmp_name'];

		move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
		$ty = $_FILES['img']['type'];
	
	$size = $_FILES['img']['size'];
	$path = $_FILES['img']['full_path'];
	
	
	echo "Name :".$i."<br>";
    echo "type :".$ty."<br>";
	echo "orginal path :".$org."<br>";
	echo "size :".$size."<br>";
	echo "path :".$path."<br>";

		






		$sql = "UPDATE `student` SET `sname`='$name',`saddress`='$address',`mobno`='$mobno',`sgender`='$gender',`scourse`='$course',`photo`='$i' WHERE `sid`= '$var'";
		       $result = mysqli_query($con,$sql);


      if($result==1)
{
         echo "Updated ";
}
else
{
echo "not updated ";
}
	}
?>
<html>
<head>
<style>


</style>
<link href="regform.css"  rel="stylesheet">
</head>
<body>

<?php
include 'h.php';
?>


<br><br><br><br><br>
<center>
<h2><b><u> UPDATE </u></b></h2>

<form method="POST" action ="#" enctype="multipart/form-data">
<?php
while($row=mysqli_fetch_array($result))
{
	?>
<div class="split left">
<div class="leftwards">



<table>
  
<tr>
<td>
NAME:</td><td><input type="text" name="name" value="<?php echo $row["sname"];?>"  ><br><br>
</td>
</tr>

<tr>
<td> Address:</td>
<td><input type="text" name="address" value="<?php echo $row["saddress"];?>"><br><br></td>
</tr>
	
	
		
<tr>
<td>
Mobile no:</td><td><input type="number" name="mobno"   value="<?php echo $row["mobno"];?>" ><br><br>
</td>
</tr>
	
	<tr>
	<td>Gender:</td>
	<td><input type="text" name="gender" value="<?php echo $row["sgender"];?>"><br><br></td>
</tr>




	<tr>
	<td>Course:</td>
	<td><input type="text" name="course" value="<?php echo $row["scourse"];?>"><br><br></td>
</tr>




	<tr>
	<td>Certificate:</td>
	<td><input type="file" name="img"><br><br></td>
</tr>
	

	


 
<tr><td>
</td><td><input type="submit" value="Update" name="REGISTER"></td></tr>
</table>
<?php
}
?>

</center>

</form>

</div></div>
	

	
	
	</body>
	</html>