<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$firstName=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastName=$_POST['lastname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$age=$_POST['age'];
    $blood=$_POST['blood'];
    $date=$_POST['date'];
   
	
	$sql="insert into donar( firstName,middlename,lastName, email,contact,address,age,blood,date)
	values('$firstName','$middlename','$lastName','$email','$contact', '$address', '$age','$blood' ,'$date')";
	
	

	if(mysqli_query($con,$sql)) 
	{
		echo "<script>alert('new record inserted')</script>";
		echo"<script>window.open('register.php','_self')</script>";
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	}
	else
	{
		echo "<script>alert('fields are empty')</script>";
		echo"<script>window.open('register.php','_self')</script>";
	}


?>