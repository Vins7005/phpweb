<html>

<head>
  <link rel="stylesheet" type="text/css" href="nav.css">
  <style>
    
    .function h2{
      font-size: 40px;
      text-align: center;
    }
    .function{
      margin-left: 50px;


    }
    input {
  box-sizing: border-box;
  width: 50%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
  font-size: 16px;
}
input[type="submit"]{

  text-align: center;
   font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  display: block;
  font-size: 18px;
  position: relative;
  width: 25%;

}
  </style>

  <title></title>
</head>
<body>
  <header>
  
<P class="smm" align="center" style="color: brown;">PATIL HOSPITAL LTD.</P>
<h1 class="smm" align="center" style="color: navy;">Jivan Blood Bank </h1>
</marquee>
</header><hr>

<div class="navbar">
 <a href="addminhome.php">Home</a>

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


<div class="function">
  <h2>Regestration</h2>
  <form method="post" action=" process.php" >
    
   <h4>first Name:</h4>
     <p>
  <input type="text"  name="firstname" placeholder="First name" required>
  </p>
  <h4>middle Name:</h4>
     <p>
  <input type="text"  name="middlename" placeholder="Father name" required>
  </p>
  <h4>last Name:</h4>
     <p>
  <input type="text"  name="lastname" placeholder="Sur name" required>
  </p>
  
    <h4>Email:</h4>
    <p>
      <input type="email"  name="email" placeholder="Email id" required>
    </p>
    <h4>Contact:</h4>
    <p>
      <input type="number"  name="contact" placeholder="Mobile no." required>
    </p>
    <h4>Address:</h4>
    <p>
      <input type="text"  name="address" placeholder="Address" required>
    </p>
    <h4>Age:</h4>
    <p>
      <input type="number"  name="age" placeholder="Age" required>
    </p>
    <h4>Blood Group:</h4>
    <p>
      <input type="text"  name="blood" placeholder="Your blood Group" required>
    </p>
    <h4>date:</h4>
    <p>
      <input type="date"  name="date" placeholder="date" required>
    </p>
   
    <p>
    <input type="submit" name="submit" value="save">
    </p>
  </form>
  
</div>

</body>
</html>
<button onclick="history.back()"> <<<<</button>