<?php
session_start();
if(isset($_SESSION['user_name'])){
?>

<?php 
require('header2.php');
?>





<?php 
 require('connect.php');
 $emp_id=$_GET['emp_id'];
 $sql="SELECT * FROM employee_info where emp_id='$emp_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>
  				<form action="update.php" method="post" enctype="multipart/form-data">
  				<input class="form-control" type="hidden" name="emp_id" value="<?php echo $emp_id; ?>">
			Name:<input class="form-control" type="text" name="emp_name" value="<?php echo $data['emp_name'] ?>"><br> 
			Fathers Name:<input class="form-control" type="text" name="fathers_name" value="<?php echo $data['father_name'] ?>" ><br>
			Mothers name:<input class="form-control" type="text" name="mothers_name" value="<?php echo $data['mother_name']?>" ><br>
			<input type="file" name="image">
			<img src="uploaded_image/<?php echo $data['emp_image'] ?>" width='100' height='100'><br><br> 
			<input class="btn btn-primary" type="submit" value="submit">
			</form>

		<?php
}else{
  header('location:login.php?message=You must login first.');
}
?>
<?php 
require('footer2.php');
?>
