<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()) {
	
if( isset($_POST['username']) && 
	isset($_POST['roll']) && 
	isset($_POST['hostel']) && 
	isset($_POST['mail']) &&
	isset($_POST['mobile']) &&	
	isset($_POST['password']))
{
	$fullname = $_POST['username'];
	$rollno = $_POST['roll'];
	$hostel = $_POST['hostel'];
	$email = $_POST['mail'];
	$mobno = $_POST['mobile'];
	$password= $_POST['password'];
	
	if(!empty($fullname) && !empty($rollno) && !empty($hostel) && !empty($email) && !empty($mobno) && !empty($password))
	{
		
			$query = "INSERT INTO `users` VALUES ('', '".$fullname."', '".$rollno."', '".$hostel."', '".$email."', '".$mobno."', '".$password."')";
		
			if($query_run = mysql_query($query)) 
			{
				header('Location: index.php');
			}
			else {
				echo 'not registered';
			}
		
	}
	else
	{
		echo 'All fields required';
	}
}

?>

<!--
Not yet Registered?? Register Now.
<form action="register.php" method="POST">
Full Name: <br><input type="text" name="username"><br>
Roll Number:<br> <input type="text" name="roll"><br>
Hostel: <br> <input type="text" name="hostel"><br>
Email id:<br> <input type="text" name="mail" ><br>
Mobile No:<br> <input type="text" name="mobile"><br>
Password: <br><input type="password" name="password"><br>
<input type="submit" value="Register Me">
</form>
-->
<?php
}
else if(loggedin()) {
	echo 'you are already registered and logged in.';
}
?>