<?php
require('connect.php');
$emp_id=$_GET['emp_id'];
$sql="select emp_image from employee_info where emp_id='$emp_id'";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($query);
if(file_exists("uploaded_image/".$data['emp_image'])){
	unlink("uploaded_image/".$data['emp_image']);
}
$sql="delete from employee_info where emp_id='$emp_id'";
mysqli_query($connect,$sql);
header('location:showdata.php?message=Data Deleted Successfully');



?>