<!DOCTYPE html>
<html>
<head>
<style>
body 
{
bgcolor="yellow";

}

h1,h2 {
  color: red;
}
ul 

{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: hotpink;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: yellowgreen;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: hotpink;}

.dropdown:hover .dropdown-content {
  display: block;
}



* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</head>
<body >
<marquee><P class="smm" align="center" style="color: brown;">PATIL HOSPITAL LTD.</P>
<h1 class="smm" align="center" style="color: navy;">Jivan Blood Bank, </h1></marquee>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="register.php">Register</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      
     <a href="donar.php">Donar Name</a>
      <a href="blood.php">Blood Group</a>
      <a href="camp.php">New camp</a>
      <a href="c_report.php">Camp Report </a>
    </div>
  </li>
</ul>
</body>
</html>