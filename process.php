<?php

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$myfile = fopen("testfile.txt", "w");
	fwrite($myfile, $fname."\n");
	fwrite($myfile, $lname."\n");
	fwrite($myfile, $email."\n");
	fwrite($myfile, $password."\n");
	fclose($myfile);
	header("location:loginsuccessful.php");
    //comment
}
?>