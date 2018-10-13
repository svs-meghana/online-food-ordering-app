
<html>
    <head>
       
        <style>
            h1
            {
                text-align:center;
                color:white;
                
            }
            body
            {
                color:white;
                font-size:40px;
                font-style:italic;
                background-image: url("p3.jpg");
                background-repeat: no-repeat;
                background-size: 1600px 950px;
            
            }
            table{
                
                text-align: center;
            }
             .navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
            
            </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="navbar">
  <a href="loginsuccess.php">Home</a>
  <a href="profile.php">Profile</a>
  <div class="dropdown">
    <button class="dropbtn">CITY 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="hyd.php">Hyderabad</a>
      <a href="bang.php">Banglore</a>
      <a href="mumbai.php">Mumbai</a>
      <a href="delhi.php">Delhi</a>
    </div>
  </div>
  <div style="float: right">
      <a href="logout.php">logout</a>
      </div>
  </div>
        <h1>
            your orders 
        </h1>
        
    </body>
    

<?php
session_start();
 $x=$_SESSION["logid"];
 $conn = new mysqli("localhost:3306", "root", "meghana","meghana");

if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
} 
$sql="select * from orders where custname='$x';";
$res=$conn->query($sql);
if($res->num_rows)
{
    while($row=$res->fetch_assoc())
    {
        echo "hname   ".$row[hname];
        echo "</br>";
        echo "itemname  ".$row[itemname]."    -quantity   ".$row[count];
        echo "</br>";
    }
}
?>




