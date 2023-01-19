<?php
include("dbconnect.php");
$admin_id=$_POST['adminid'];
$password=$_POST['password'];
$query="SELECT adminid FROM adminlogin WHERE adminid='$admin_id' and password='$password'";
$result =$con->query($query) OR die();


?>

<html>
<body>

<?php 
  if(mysqli_num_rows($result)>0)
  {
     $_SESSION['adminvar']= $admin_id;
     header("location: adminpanel.php");
   }
   else 
  {
    
     $error="Your Login Name or Password is invalid";
    echo("$error");?>  
   <a href="adminlogin.php">RETRY</a>
   <?php
  }
?>
