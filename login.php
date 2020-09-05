<?php 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pass'];
if($username=="lec" && $password=="clz")
{
	header("location:loginsuccessful.php");
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form method="post">
	Username <input type="text" name="username"><br><br>
	Password <input type="password" name="pass"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>