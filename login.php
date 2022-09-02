<?php 
require('header.php');
?>

<?php if(isset($_GET['message'])){  ?>
<p><?php echo $_GET['message'] ?></p>
<?php } ?>

<div class="container">
	
<h2>Employee Management System</h2>
<form action="login_action.php" method="post">
	<div class="form-group">
User Name<input class="form-control" type="Text" name="user_name"><br>
Password<input class="form-control" type="password" name="password"><br>
<input class="btn btn-primary" type="submit" value="Login">
<button class="btn btn-primary"><a href="register.php"></a>Register</button>
</div>
</form>
</div>

<?php 
require('footer.php');
?>




