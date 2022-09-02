

<?php
//session_start();
require('connect.php');

if(empty($_FILES['image']['name'])){
	$emp_image=null;
}else{
	$emp_image= mt_rand(1000,9999).$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploaded_image/$emp_image");
}


$emp_name= $_POST['emp_name'];
$fathers_name= $_POST['fathers_name'];
$mothers_name= $_POST['mothers_name'];
if(empty($emp_image)){
$sql="INSERT INTO employee_info(emp_name,father_name,mother_name) VALUES ('$emp_name','$fathers_name','$mothers_name')";	
}else{
	$sql="INSERT INTO employee_info(emp_name,father_name,mother_name,emp_image) VALUES ('$emp_name','$fathers_name','$mothers_name','$emp_image')";
	}

mysqli_query($connect,$sql);
header("location:showdata.php?message=Data Inserted Successfully.");



?>



