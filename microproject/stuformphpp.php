
<?php
include 'dbconnect.php';

    if(isset($_POST["REGISTER"])){
		
		$name=$_POST["name"];
		
		$address=$_POST["address"];
		$mobno=$_POST["mobno"];
		$gender=$_POST["gender"];
		$course=$_POST["course"];
		$i=$_FILES["img"]["name"];
		move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
		
       
		$sql="INSERT INTO `student`( `sname`, `saddress`, `mobno`,`sgender`, `scourse`,`photo`) VALUES ('$name','$address','$mobno','$gender','$course','$i')";
		$result=mysqli_query($con,$sql);
		if($result==1)
			echo "  inserted successfully";
		else
			echo "not inserted";
				header("location:studentregform.php");

	   
	}
?>
