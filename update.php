



<?php
require('connect.php');
$emp_id=$_POST['emp_id'];
$emp_name= $_POST['emp_name'];
$fathers_name= $_POST['fathers_name'];
$mothers_name= $_POST['mothers_name'];

if(empty($_FILES['image']['name'])){
  $emp_image= NULL;
}else{
	$emp_image= mt_rand(1000,9999).$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploaded_image/$emp_image");

$sql="select emp_image from employee_info where emp_id='$emp_id'";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($query);

if(file_exists("uploaded_image/".$data['emp_image'])){
	unlink("uploaded_image/".$data['emp_image']);
}
}

if(empty($emp_image)){
 $sql="UPDATE employee_info SET emp_name='$emp_name',father_name='$fathers_name',mother_name='$mothers_name' where emp_id='$emp_id'";

}else{
	$sql="UPDATE employee_info SET emp_name='$emp_name',father_name='$fathers_name',mother_name='$mothers_name', emp_image='$emp_image' where emp_id='$emp_id'";
}
mysqli_query($connect,$sql);

header('location:showdata.php?message=Data Updated Successfully');
//commit


?>


