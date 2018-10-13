<?php
session_start();
?>
<html>
    <head>
       
        <style>
            #photo-right
            {
                float:right;
            }
         #table1{
                
                margin-bottom:400px;
                margin-right:100px;
                
            }
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
  <div style="float: right">
      <a href="cart.php">orders</a>
      </div>
  </div>
        
            
        
        
    </body>
    

<?php
$x=$_POST["hotels"];
$_SESSION["hotelname"]=$x;
 $conn = new mysqli("localhost:3306", "root", "meghana","meghana");
echo '<h1>';
echo $x.'Menu';
echo '</h1>';
if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
} 

$hotelno;
$sql = "select * from hotels where hotelname ='$x';";
$res=$conn->query($sql);
if($res->num_rows)
{
    $row=$res->fetch_assoc();
   $hotelno= $row[hno];
}
$sql2="select * from items where hno='$hotelno';";
$res2=$conn->query($sql2);

$_SESSION["hotelno"]=$hotelno;
if($res2->num_rows)
{
    
     echo'<form action="hydbill.php" method="POST">';
     
     
    while($row=$res2->fetch_assoc())
    {
      
     
    echo '<input type="checkbox" name="items[]" value="'.$row[itemname].'">';
    echo $row[itemname];
    echo "--";
    echo 'Rs'.$row[price];
     echo'</br>';
    
    }
    echo ' <table align="center" border="1" width="2" cellspacing="1" cellpadding="3" >';
    echo '<tr>';
    echo '<td>';
    echo '<input type="submit" value="getbill">';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    
} 
$result = $conn->query("SELECT image FROM pics where hno='$hotelno';");
   
    if($result->num_rows > 0){
        $a=300;
         echo '<table align="center">';
          echo'<tr>';
          echo '<td>';
      while($imgData = $result->fetch_assoc())
        {
          
          
           $s=$imgData['image'];
         //  header("content-type:image/jpg");
           echo '<img src="data:image/jpg;base64,'.base64_encode($s).'"width="300" height="250">';
         /*$con=file_get_contents($s);
           $en=base64_encode($con);
           $mime='image/gif';
            $binary_data='data:'.$mime.';base64,'.$en ;*/
           echo '\t';
           
        }  
         echo'</td>';
           echo'</tr>';
           
        echo '</table>';
        
    }else{
        echo 'Image not found...';
    }
   
     ?>
</html>

