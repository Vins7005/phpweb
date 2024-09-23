<html>

<head>
  <link rel="stylesheet" type="text/css" href="nav.css">
  <style>
   button{
    font-size: 20px;
    float: left;
    width: 10%;
    background-color: hotpink;
    margin: 10px;
   } 
   button:hover{
    background-color: yellowgreen;
   }


  </style>

  <title></title>
</head>
<body>
  <header>
  
<P class="smm" align="center" style="color: brown;">JAY SHIVRAY EDUCATION SOCIETY'S</P>
<h1 class="smm" align="center" style="color: navy;">Sadashivrao Mandlik Mahavidyalya Murgud </h1>
</marquee>
</header><hr>

</body>
</html>
<?php

include('database.php');
$sql = "SELECT firstname,middlename, lastname, email, contact, age, blood, date FROM donar where blood='A+'  ";
$result = mysqli_query($con, $sql);
?>
<h2 style="text-align: center;">A+ Blood report</h2>
<table border ="1" cellspacing="0" cellpadding="10" width="100%">
     <tr>
    <th>Id</th>
    <th>firstname</th>
    <th>middlename</th>
    <th>lastname</th>
    <th>email</th>
    <th>contact</th>
    <th>age</th>
    <th>blood</th>
    <th>date</th>
    
  </tr>
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


  </table>


