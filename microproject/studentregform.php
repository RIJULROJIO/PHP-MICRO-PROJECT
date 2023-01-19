
<html>
<head>


<title> APPLICATION FORM </title>
<style>
<style>

</style>
    
	<link href="regform.css"  rel="stylesheet">

</head>
<body>

<?php
include 'h.php';
?>

<form action="stuformphpp.php" method="post" enctype="multipart/form-data"> 
<div class="split left">
<div class="leftwards">
<center>
<br>
<br>
<br>
<hr>
<h1><u><b> STUDENT REGISTRATION  FORM </h1></u></b>
<hr>

<table>



<tr>
<td>
NAME:</td><td><input type="text" name="name" size="20" placeholder="Name" ><br><br>
</td>
</tr>
<tr><td>
<p><label for="address">ENTER YOUR ADDRESS:</label></p>
 </td><td><textarea id="address" name="address" rows="4" cols="20">
    
	</textarea><br><br></td></tr><br><br><br>
	
	
	
<tr>
<td>
Mobile no:</td><td><input type="number" name="mobno" size="20" placeholder="mobno" ><br><br>
</td>
</tr>
	
	<tr><td><label for="gender"> GENDER:</label></td><br><br><br>
<td><input type="radio" name="gender" value="male">Male<br><br><br>
<input type="radio" name="gender" value="female">Female<br><br>
</td></tr>
<tr><td>
<label for="branch"> COURSE  :</label>
</td>
<td>
<select name="course">
<option>  MCA  </option>
<option> BTECH </option>
<option> MTECH  </option>
<option> INTMCA</option>
</select><br><br>
</td>
</tr>
 <tr>
 <tr><td>
<label for="file"> CERTIFICATE:</label>
</td>
 <td>
</td><td><input type="file" value="Submit" name="img"><br></td></tr>
 
<tr><td>
</td><td><input type="submit" value="Register" name="REGISTER"></td></tr>
</table>

</center>

</form>

</div></div>

	
	
	</body>
	</html>