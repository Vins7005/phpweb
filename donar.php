<html>

<head>
  <link rel="stylesheet" type="text/css" href="nav.css">
  

  <title></title>
</head>
<body>
  <header>
  
<P class="smm" align="center" style="color: brown;">PATIL HOSPITAL LTD.</P>
<h1 class="smm" align="center" style="color: navy;">Jivan Blood Bank,</h1>
</marquee>
</header><hr>

<div class="navbar">
 <a href="home.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Menu
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="home.php">Home</a>
       <a href="donar.php">Donar Name</a>
      <a href="blood.php">Blood Group</a>
      <a href="camp.php">New camp</a>
      <a href="c_report.php">Camp Report </a>
    </div>
  </div>
</div>
<hr>
</body>
</html>
<?php

include('database.php');
$sql = "SELECT firstname,middlename, lastname, email, contact,address, age, blood, date FROM donar ";
$result = mysqli_query($con, $sql);
?>
<center>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Id</th>
    <th>firstname</th>
    <th>middlename</th>
    <th>lastname</th>
    <th>email</th>
    <th>contact</th>
    <th>address</th>
    <th>age</th>
    <th>blood</th>
    <th>date</th>
   
  </tr>
  </center>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['firstname']; ?> </td>
   <td><?php echo $data['middlename']; ?> </td>
 <td><?php echo $data['lastname']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['contact']; ?> </td>
   <td><?php echo $data['address']; ?> </td>
   <td><?php echo $data['age']; ?> </td>
   <td><?php echo $data['blood']; ?> </td>
   <td><?php echo $data['date']; ?> </td>
 <tr>

 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>

 <?php } ?>
 
 </table>
 <button onclick="window.print()"> Print</button>
 <button onclick="history.back()"> <<<<</button>