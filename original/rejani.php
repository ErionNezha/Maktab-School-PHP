<?php 
session_start();
header('location:admin.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'maktablar');
$malumot=$_POST[malumot];
$s="SELECT *from reja where malumot='$malumot'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "Username Alread Token";
}
else{
	$reg="INSERT into reja(malumot) values ('$malumot')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}

 ?>