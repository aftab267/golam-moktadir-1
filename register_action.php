<?php 
require('connect.php');

$emp_name= $_POST['name'];
$email= $_POST['email'];
$user_name= $_POST['user_name'];
$password= $_POST['password'];
$sql="select* from users";
$query=mysqli_query($connect,$sql);
if(mysqli_num_rows($query)){
	$sql="INSERT INTO users(name,email,user_name,password,status) VALUES ('$emp_name','$email','$user_name','$password','1')";
}else{
	$sql="INSERT INTO users(name,email,user_name,password,status) VALUES ('$emp_name','$email','$user_name','$password','2')";
	mail($email, 'Tesining','test message.');
}


$query=mysqli_query($connect,$sql);
header('location:register.php?message=You can login after confimation.');
?>