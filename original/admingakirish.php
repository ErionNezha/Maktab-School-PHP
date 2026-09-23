<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'maktablar');
$username=$_POST[username];
$password=$_POST[password];
$s="SELECT *from admin where username='$username' AND password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) {
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header('location:admin.php');
}
else{
	header('location:index.php');
}

?>
