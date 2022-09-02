
<?php
session_start();
if(isset($_SESSION['user_name'])){
?>
<?php 
require('header2.php');
?>
       

					         <form action="insert.php" method="post" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Name:</label>
					    <input type="text" name="emp_name" class="form-control"   placeholder="Name" >
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Fathers Name:</label>
					    <input type="text" name="fathers_name" class="form-control" id="exampleInputPassword1" placeholder="Fathers Name" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Mothers name:</label>
					    <input type="text" name="mothers_name" class="form-control" id="exampleInputPassword1" placeholder="Mothers name" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Image:</label>
					    <input type="file" name="image"  id="exampleInputPassword1"  >
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>




    		
    		

 <?php 
require('footer2.php');
?>

		<?php
}else{
  header('location:login.php?message=You must login first.');
}
?>








	
	

