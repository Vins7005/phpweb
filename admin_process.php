<?php
include 'database.php';
if (isset($_POST['submit'])) 
{

  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql =" SELECT *FROM log where username='$username'AND password='$password' ";
$que=mysqli_query($con,$sql);
if (mysqli_num_rows($que))
   {
  	echo "<script>alert('Login successfull')</script>";
    echo"<script>window.open('home.php','_self')</script>";
  }
  
  else
  {
  echo "<script>alert('wrong username or passsword') </script>";
   echo"<script>window.open('admin login.php','_self')</script>";
  }

mysqli_close($con);

}

?>