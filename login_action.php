<?php
session_start();
require('connect.php');
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$sql="select * from users where user_name='$user_name' and password='$password' and status=2";
$query=mysqli_query($connect,$sql);

if(mysqli_num_rows($query)==1){
	$data=mysqli_fetch_assoc($query);
	$_SESSION['user_name']=$data['user_name'];
	header('location:showdata.php');
}else{
	header('location:login.php?message=Invalid Login name or password.');
}
?>

