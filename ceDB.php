<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$host="localhost";
	$fname=$_POST["fname"];
	$lname =$_POST["lname"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$language=$_POST["language"];
	$password=$_POST["password"];
	 echo "$fname";
	$con=mysqli_connect($host,"root","","ceyloneducation_db");
	$sql="INSERT INTO registration(Fname,Lname,Email,Gender,Language,Password) VALUES ('$fname','$lname','$email','$gender','$language','$password')";
	if($con){
		mysqli_query($con,$sql);
	}else{
		"connection to DB Failed";
	}
	include 'signup.html';

	$sql2="SELECT * FROM registration";
	$res=mysqli_query($con,$sql2);

?>
</body>
</html>