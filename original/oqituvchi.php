<?php 
session_start();
header('location:admin.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'maktablar');
$ism=$_POST[ism];
$familiya=$_POST[familiya];
$malumot=$_POST[malumot];
$email=$_POST[email];
$s="SELECT *from oqituvchi where ism='$ism'familiya='$familiya'malumot='$malumot'email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "Username Alread Token";
}
else{
	$reg="INSERT into oqituvchi(ism,familiya,malumot,email) values ('$ism','$familiya','$malumot','email')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}

 ?>