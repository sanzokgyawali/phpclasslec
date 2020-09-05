<?php

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$myfile = fopen("testfile.txt", "w");
	fwrite($myfile, $fname."<br>");
	fwrite($myfile, $lname."<br>");
	fwrite($myfile, $email."<br>");
	fwrite($myfile, $password."<br>");
	fclose($myfile);
	header("location:test.php");
    //comment
}
?>