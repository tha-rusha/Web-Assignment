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
	$school=$_POST["school"];
	$password=$_POST["psw"];
	 echo "$fname";
	$con=mysqli_connect($host,"root","","ceyloneducation_db");
	$sql="INSERT INTO registration(Fname,Lname,Email,School,Password) VALUES ('$fname','$lname','$email','$school','$password')";
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