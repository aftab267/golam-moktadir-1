<?php
session_start();
if(isset($_SESSION['user_name'])){
?>
<?php 
require('header2.php');
?>    

<?php
//code start
require('connect.php');
$sql="SELECT * FROM employee_info";
$query=mysqli_query($connect,$sql);
?>
<?php if(isset($_GET['message'])){  ?>
<p><?php echo $_GET['message'] ?></p>
<?php } ?>
<a href="logout.php"class="btn btn-primary">Log Out</a>
<a href="index.php"class="btn btn-primary">Insert</a>
<table class="table table-bordered table-hover">
  <tr>
    <td><b>SL</b></td>
    <td><b>Employee Name<b></td>
    <td><b>Fathers Name<b></td>
    <td><b>Mothers Name<b></td>
    <td><b>Employee Image<b></td>

    <td><b>Action<b></td>
  </tr>
  <?php
  $x=1;
  foreach($query as $val){

  ?>
  <tr>
    <td><?php echo $x++ ?></td>
    <td><?php echo $val['emp_name'] ?></td>
    <td><?php echo $val['father_name'] ?></td>
    <td><?php echo $val['mother_name'] ?></td>
    <td><img src="uploaded_image/<?php echo $val['emp_image'] ?>" width='100' height='100'></td>
    <td>
     <a href="edit.php?emp_id=<?php echo $val['emp_id'] ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="delete.php?emp_id=<?php echo $val['emp_id'] ?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
  }
  ?>
</table>
  </div>
</body>
</html>

<?php
}else{
  header('location:login.php?message=You must login first.');
}
?>
<?php 
require('footer2.php');
?>



