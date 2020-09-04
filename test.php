<?php
$con=new mysqli('localhost','root','','db_phpclass');
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="insert into tbl_details(fname,lname,email,password)values('$fname','$lname','$email','$password')";
    if(mysqli_query($con,$sql))
    {
    	echo "<script>alert('Inserted Successfully')</script>";
    }
    else
    { 
    	echo "<script>alert('Failed')</script>";
    }
    //comment
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Php</title>
</head>
<body>
<form method="post">
	First Name: <input type="text" name="fname" required><br><br>
	Last Name: <input type="text" name="lname" required><br><br>
	Email: <input type="email" name="email" required><br><br>
	Password: <input type="password" name="password" required><br><br>
	<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>