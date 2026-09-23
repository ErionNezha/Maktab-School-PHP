<?php 
session_start();
header('location:admin.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'maktablar');
$nomi=$_POST[nomi];
$mazmuni=$_POST[mazmuni];
$s="SELECT *from yangiliklar where nomi='$nomi'mazmuni='$mazmuni'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "Username Alread Token";
}
else{
	$reg="INSERT into yangiliklar(nomi,mazmuni) values ('$nomi','$mazmuni')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}

 ?>