<?php 
session_start();
header('location:admin.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'maktablar');
$sinf=$_POST[sinf];
$nomi=$_POST[nomi];
$s="SELECT *from fan where sinf='$sinf'nomi='$nomi'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "Username Alread Token";
}
else{
	$reg="INSERT into fan(sinf,nomi) values ('$sinf','$nomi')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}

 ?>