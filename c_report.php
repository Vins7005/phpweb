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
  
<P class="smm" align="center" style="color: brown;">PATIL HOSPITAL LTD.</P>
<h1 class="smm" align="center" style="color: navy;">Jivan Blood Bank, </h1>
</marquee>
</header><hr>


</body>
</html>

<?php

include('database.php');
$sql = "SELECT place,Date from camp";
$result = mysqli_query($con, $sql);
?>
<h2 style="color: brown;text-align: center;  ">Camp Report </h2>
<center>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Id</th>
    <th>Placename</th>
    <th>Date</th>
   
     </tr>
  </center>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['place']; ?> </td>
   <td><?php echo $data['Date']; ?> </td>
  
   
 <tr>

 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 
 </table>
 <button onclick="window.print()"> Print</button>
  <button onclick="history.back()"> <<<<</button>