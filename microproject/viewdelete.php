
<?php
include 'dbconnect.php';

?>
<html>
<body>

<?php
include 'adminpanel.php';
?>
<table border="2"  width="50%">
<tr>
<td>ID</td>
<td>NAME</td>
<td>address</td>
<td>Mobile no</td>

<td>gender</td>
<td>course</td>
<td>Certificate</td>
<td>Delete</td>



</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM `student`");
//print_r($result);
while($row=mysqli_fetch_array($result))
{
	?>
	
	<tr>
	<td><?php echo $row["sid"];?></td>
	<td><?php echo $row["sname"];?></td>
	<td><?php echo $row["saddress"];?></td>
			<td><?php echo $row["mobno"];?></td>

	<td><?php echo $row["sgender"];?></td>
	<td><?php echo $row["scourse"];?></td>
	<td><img src="uploads/<?php echo $row["photo"];?>" height="130px" width="130px"></td>
		<td><a href="delete.php?uid=<?php echo  $row["sid"];?>">REMOVE USER </a></td>


	
	</tr>
	
<?php
}
?>	
</body>
</html>


</table>