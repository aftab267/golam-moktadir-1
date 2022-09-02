<?php 
require('header2.php');
?>

<form action="register_action.php" method="post" >
	
	Name:<input type="text" name="name">
    Email:<input type="email" name="email">
    User_name<input type="text" name="user_name">
    Password<input type="password" name="password">
    <input type="submit" value="register">
</form>
<?php 
require('footer2.php');
?>
