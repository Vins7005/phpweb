<?php
include'database.php';
if (isset($_POST['submit']))
{
	$place=$_POST['place'];
	$date=$_POST['date'];
	
	
	$sql="insert into camp(  place,date)
	values('$place','$date')";
	if(mysqli_query($con,$sql)) 
	{
		echo "<script>alert('new record inserted')</script>";
		echo"<script>window.open('camp.php','_self')</script>";
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	mysqli_close($con);

}
?>